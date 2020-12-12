<template>
<div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>                            
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>    
        </thead>
        <tbody>
            <tr v-for="doctor in doctores" :key="doctor.id">
                <th v-text="doctor.Cedula"></th>
                <th v-text="doctor.Nombre"></th>
                <th v-text="doctor.Apellidos"></th>
                <th v-text="doctor.Especialidad"></th> 
                <th>
                    <button data-toggle="modal" data-target="#updateModal" type="button" class="btn btn-info" v-on:click="crearCita(doctor)">
                        Agendar Cita
                    </button>                                  
                </th>                           
            </tr>                           
        </tbody>
    </table>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Datos Del Doctor {{Citas.Nombre}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="RegistrarCita">
                        <div class="row">
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Doctor:</label>
                                <input type="text"  v-model="datosdoctor.Nombre" class="form-control" name="Nombre" readonly>
                            </div>
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Apellidos:</label>
                                <input type="text"  v-model="datosdoctor.Apellidos" class="form-control" name="Apellidos" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Paciente:</label>
                                <input type="text"  class="form-control" name="usuario">                                
                            </div>
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Apellidos:</label>
                                <input type="text"  class="form-control" name="usuariosape">
                            </div>                            
                        </div>                    
                        <div class="row">
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Fecha:</label>
                                <input type="date"  class="form-control" name="fecha">                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button ttype="submit" name="action" class="btn btn-primary">Agendar</button>
                            <!--{{materiaedit}} -->                                 
                        </div>
                    </form>
                </div>                    
            </div>
        </div>
    </div>
</div>   
</template>
<script>
export default {
    data() {
        return {
            //array para obtener todos las  doctores
            doctores: [],
            datosdoctor:{
                Nombre:"",
                Apellidos:"",
            },
            Citas: {
                Nombre:"",
                Apellidos:"",
                usuario:"",
                usuariosape:"",
                fecha:"",

            },
        };
    },
    mounted() {
        this.getDoctores();
        console.log('Registros Cargados Con Exito')
    },
    methods: {
        //función para obtener todas las    doctores de /api/materia con axios
        getDoctores: function() {
            axios.get("http://127.0.0.1:8000/usuarios/listadoctores").then(response => {
                this.doctores = response.data.doctores;
                console.log (this.doctores);
            });
        },
        crearCita: function(doctor){
            this.datosdoctor.id = doctor.id;
            this.datosdoctor.Nombre = doctor.Nombre;
            this.datosdoctor.Apellidos = doctor.Apellidos;
            $('#updateModal').modal('show')
        },
        //función para editar Materia
        RegistrarCita(){            
            var url = 'http://127.0.0.1:8000/usuarios/registrar-cita';
            //actualizamos la materia
            axios.put(url, this.Citas).then(response =>{
                this.getDoctores();
                this.Citas.Nombre="";
                this.Citas.Apellidos="";
                this.Citas.usuario="";
                this.Citas.usuariosape="";
                this.Citas.fecha="";
                $('#updateModal').modal('hide');
            }).catch(error=>{
            });
        },
    }
};
</script>
