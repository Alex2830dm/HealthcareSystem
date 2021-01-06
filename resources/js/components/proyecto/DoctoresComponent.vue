<script>
function valor() {
    var tipo = document.getElementById("tipo").value;
    if(tipo = "Consultorio"){
        var n1 = document.getElementById("precio1").value;         
        var resultado = parseInt(n1);
    }else if(tipo = "Domicilio"){            
        var n2 = document.getElementById("precio2").value;
        var resultado = parseInt(n2)
    }
    document.getElementById("resultado").value = resultado;
}
</script>
<template>
<div>
    <div class="row tm-mb-90 tm-gallery">
        <div class="col-4" v-for="doctor in doctores" :key="doctor.id">            
            <div class="card border-info mb-3" style="max-width: 18rem;" >
            <div class="card-header bg-transparent border-secondary">
                <h4 class="text-primary" v-text="doctor.Nombre"></h4>
            </div>
            <div class="card-body text-info">
                    <h5>
                        <label v-text="doctor.Nombre"></label>
                        <label v-text="doctor.Apellidos"></label>
                    </h5>
                    <label>Cedula: </label> <label v-text="doctor.Cedula"></label><br>
                    <label>Especialidad: </label> <label v-text="doctor.Especialidad"></label><br>
                    <label>Zona: </label> <label v-text="doctor.Zona"></label><br>
            </div>
            <div class="card-footer bg-transparent border-secondary">
                <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal" v-on:click="editDoctores(doctor)">
                    Ver Información
                </button>
                <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#CitaModal" v-on:click="Citas(doctor)">
                    Agendar Cita
                </button>
            </div>
        </div>
        </div>
    </div>    
    <!--<table class="table table-hover table-striped">
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
                    <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#exampleModal" v-on:click="editDoctores(doctor)">
                        Ver Información
                    </button>
                    <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#CitaModal" v-on:click="Citas(doctor)">
                        Agendar Cita
                    </button>
                </th>                           
            </tr>                           
        </tbody>
    </table>-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos del Doctor: <span class="badge badge-pill badge-primary">{{editDocs.Nombre}}</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                    
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text"  v-model="editDocs.Nombre" class="form-control" name="Nombre" readonly>
                        </div>
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input type="text"  v-model="editDocs.Apellidos" class="form-control" name="Apellidos" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Cedula:</label>
                            <input type="text"  v-model="editDocs.Cedula" class="form-control" name="Cedula" readonly>
                        </div>
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Especialidad:</label>
                            <input type="text" v-model="editDocs.Especialidad" class="form-control" name="Especialidad" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <label for="recipient-name" class="col-form-label">Direccion:</label>
                            <input type="text" v-model="editDocs.Direccion" class="form-control" name="Direccion" readonly>
                        </div>                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Telefono:</label>
                            <input type="text" v-model="editDocs.Telefono" class="form-control" name="Telefono" readonly>
                        </div>
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">Zona:</label>
                            <input type="text" v-model="editDocs.Zona" class="form-control" name="Zona" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">$ Consulta:</label>
                            <input type="text" v-model="editDocs.consulta" class="form-control" name="consulta" readonly>
                        </div>
                        <div class="col-5">
                            <label for="recipient-name" class="col-form-label">$ Consulta A Domicilio:</label>
                            <input type="text" v-model="editDocs.consultadom" class="form-control" name="consultadom" readonly>
                        </div>
                    </div>                                                                                                            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CitaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar Cita Con El Doctor: <span class="badge badge-pill badge-primary">{{datosCita.Nombre}}</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" v-on:submit.prevent="CrearDoctor">
                <div class="modal-body">                    
                    <div class="row">
                        <div class="col-5">
                            <label for="Nombre"> Doctor:</label>
                            <input type="text" v-model="datosCita.Nombre" class="form-control" name="Nombre"  id="Nombre" readonly>
                        </div>  
                        <div class="col-5">
                            <label for="" class="col-form-label">Apellidos:</label>
                            <input type="text" v-model="datosCita.Apellidos" class="form-control" name="Apellidos" id = "Apellidos" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="" class="col-form-label">Paciente:</label>
                            <input type="text"  class="form-control" v-model="datosCita.usuario" name="usuario" id="usuario">
                        </div>
                        <div class="col-5">
                            <label for="" class="col-form-label">Apellidos:</label>
                            <input type="text"  class="form-control" v-model="datosCita.usuariosape" name="usuariosape" id="usuariosape">
                        </div>                            
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="direccion">Dirección</label>
                            <input type="text" v-model="datosCita.direccion" name="direccion" id="direccion" class="form-control">
                        </div>
                        <div class="col-5">
                            <label for="fecha" class="col-form-label">Fecha:</label>
                            <input type="date"  class="form-control"  v-model="datosCita.fecha" name="fecha" id="fecha">
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-5">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <select name="tipo" id="tipo" class="form-control" v-model="datosCita.tipo">
                                <option value="Consultorio">En Consultorio</option>
                                <option value="Domicilio">A Domicilio</option>
                            </select>
                        </div>                         
                        <div class="col-5">
                            <label for="costo">Costo:</label>
                            <input type="text" name="costo" v-model="datosCita.consultadom" class="form-control" readonly/>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">                    
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="action" class="btn btn-primary">Guardar</button>
                </div>
                </form>
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

            editDocs: {
                Nombre:"",
                Apellidos:"",
                Cedula:"",
                Especialidad:"",
                Direccion:"",
                Telefono:"",
                Zona:"",
                consulta:"",
                consultadom:"",
            },
            datosCita: {
                Nombre:"",
                Apellidos:"",
                usuario:"",
                usuariosape:"",
                direccion:"",
                tipo:"",
                fecha:"",
                consultadom:"",                
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
            axios.get("http://127.0.0.1:8000/admin/listadoctores").then(response => {
                this.doctores = response.data.doctores;
                console.log (this.doctores);
            });
        },
        editDoctores: function(doctor){
            this.editDocs.id = doctor.id;
            this.editDocs.Nombre = doctor.Nombre;
            this.editDocs.Apellidos = doctor.Apellidos;
            this.editDocs.Cedula = doctor.Cedula;
            this.editDocs.Especialidad = doctor.Especialidad;
            this.editDocs.Direccion = doctor.Direccion;
            this.editDocs.Telefono = doctor.Telefono;
            this.editDocs.Zona = doctor.Zona;
            this.editDocs.consulta = doctor.consulta;
            this.editDocs.consultadom = doctor.consultadom;
            $('#updateModal').modal('show')
        },
        Citas: function(doctor) {
            this.datosCita.id = doctor.id;
            this.datosCita.Nombre = doctor.Nombre;
            this.datosCita.Apellidos = doctor.Apellidos;            
            this.datosCita.consultadom = doctor.consultadom;
            $('#CitaModal').modal('show')
        },
        CrearDoctor(){
            //declaramos la url
            let url="http://127.0.0.1:8000/usuarios/registrar";
            //genermos el post para guardar la materia
            axios.post(url,this.datosCita).then(response=>{
               //pasamos el nombrela materia y guardamos 
                this.getDoctores();
                this.datosCita.Nombre="";
                this.datosCita.Apellidos="";
                this.datosCita.usuario="";
                this.datosCita.usuariosape="";
                this.datosCita.direccion="";            
                this.datosCita.tipo="";
                this.datosCita.fecha="";
                this.datosCita.consultadom="";            
                //cerramos el modal
                $('#CitaModal').modal('hide')                
                this.getMaterias();
            }).catch(error=>{
                alert('error al guardar');
                $('#CitaModal').modal('hide')
            });
        },
    }
};
</script>
