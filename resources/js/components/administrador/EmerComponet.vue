<template>
<div>
    <button data-toggle="modal" data-target="#guardarModal" type="button" class="justify-content-center btn btn-secondary">
        Añadir Nueva Emergencia
    </button>  
    <table class="table table-hover table-striped table-info">
        <thead>
            <tr>                            
                <th>Institucion</th>
                <th>Zona</th>
                <th>No. Telefono</th>                            
            </tr>    
        </thead>
        <tbody>
            <tr v-for="emergencia in emergencias" :key="emergencia.id">
                <th v-text="emergencia.Institucion"></th>
                <th v-text="emergencia.Zona"></th>
                <th v-text="emergencia.Telefono"></th>
                <th>
                    <button data-toggle="modal" data-target="#updateModal" type="button" class="btn btn-secondary" v-on:click="editEmer(emergencia)">
                        <img src="https://image.flaticon.com/icons/png/512/104/104668.png" width="20">
                    </button>
                    <button data-toggle="modal" data-target="#deletemateria" type="button" class="btn btn-danger" v-on:click="deleteid(materia)">
                        <img src="https://image.flaticon.com/icons/png/512/61/61848.png" width="20">
                    </button>
                </th>
            </tr>                           
        </tbody>
    </table>
    <div class="modal fade" id="guardarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alta De Materia Desde un componente de vue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="CrearEmergencias">
                        <div class="form-group">
                            <label for="recipient-Institucion" class="col-form-label">Institucion</label>
                            <input type="text" v-model="nuevamateria.Institucion" class="form-control" name="Institucion">
                            <label for="recipient-Zona" class="col-form-label">Zona:</label>
                            <input type="text" v-model="nuevamateria.Zona" class="form-control" name="Zona">
                            <label for="recipient-Telefono" class="col-form-label">Telefono:</label>
                            <input type="text" v-model="nuevamateria.Telefono" class="form-control" name="Telefono">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="action" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>                        
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificación De Materia Desde un componente de vue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="editarEmergencia(emergenciadit.id)">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Institucion:</label>
                            <input type="text"  v-model="emergenciadit.Institucion" class="form-control" name="Institucion">
                            <label for="recipient-name" class="col-form-label">Zona:</label>
                            <input type="text"  v-model="emergenciadit.Zona" class="form-control" name="Zona">
                            <label for="recipient-name" class="col-form-label">Telefono:</label>
                            <input type="text"  v-model="emergenciadit.Telefono" class="form-control" name="Telefono">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button ttype="submit" name="action" class="btn btn-primary">Actualizar</button>
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
            //array para obtener todos las  emergencias
            emergencias: [],
            //guardar la emergencia
            nuevamateria:{
                Institucion:"",
                Zona:"",
                Telefono:""
            },
            //array para obtener eliminar una materia materia
            emergenciadelete: [],
            //array para modificar una materia en especifico
            emergenciadit: {
                Institucion:"",
                Zona:"",
                Telefono:""
            },
        };
    },
    mounted() {
        this.getEmergencias();
        console.log('Registros Cargados Con Exito')
    },
    methods: {
        //función para obtener todas las    emergencias de /api/materia con axios
        getEmergencias: function() {
            axios.get("http://127.0.0.1:8000/admin/listaemergencias").then(response => {
                this.emergencias = response.data.emergencias;
                console.log (this.emergencias);
            });
        },
        //función para obtener el id de la materia
        editEmer: function(emergencia){
            this.emergenciadit.id = emergencia.id;
            this.emergenciadit.Institucion = emergencia.Institucion;
            this.emergenciadit.Zona = emergencia.Zona;
            this.emergenciadit.Telefono = emergencia.Telefono;
            $('#updateModal').modal('show')
        },
        //función para editar Materia
        editarEmergencia: function(id){
            //obtenemos el id de la materia
            var url = 'http://127.0.0.1:8000/admin/editemer/' + id;
            //actualizamos la materia
            axios.put(url, this.emergenciadit).then(response =>{
                this.getEmergencias();
                this.emergenciadit = { id: "", Institucion:"", Zona:"", Telefono:"" };
                $('#updateModal').modal('hide');
            }).catch(error=>{
            });
        },
        CrearEmergencias(){
            //declaramos la url
            let url="http://127.0.0.1:8000/admin/insertaremer";
            //genermos el post para guardar la materia
            axios.post(url,this.nuevamateria).then(response=>{
               //pasamos el nombrela materia y guardamos 
                this.getEmergencias();
                this.nuevamateria.Institucion="";
                this.nuevamateria.Zona="";
                this.nuevamateria.Telefono="";            
                //cerramos el modal
                $('#guardarModal').modal('hide');
                toastr.success('La materia se guardo con exito'); // se ejecuta la alerta
                this.getMaterias();
            }).catch(error=>{
                toastr.error('error al guardar');
            });
        }
    }
};
</script>
