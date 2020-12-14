<template>
<div>
    <button data-toggle="modal" data-target="#guardarModal" type="button" class="justify-content-center btn btn-secondary">
        Añadir Nuevo Doctor
    </button>  
    <table class="table table-hover table-striped table-info">
        <thead>
            <tr>                            
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Especialidad</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>    
        </thead>
        <tbody>
            <tr v-for="doctor in doctores" :key="doctor.id">
                <th v-text="doctor.Nombre"></th>
                <th v-text="doctor.Apellidos"></th>
                <th v-text="doctor.Cedula"></th>
                <th v-text="doctor.Especialidad"></th>
                <th v-text="doctor.Telefono"></th>
                <th>
                    <button data-toggle="modal" data-target="#updateModal" type="button" class="btn btn-secondary" v-on:click="editDoctores(doctor)">
                        <img src="https://image.flaticon.com/icons/png/512/104/104668.png" width="20">
                    </button>
                    <button data-toggle="modal" data-target="#deletemateria" type="button" class="btn btn-danger" v-on:click="deleteDoctor(doctor)">
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
                    <form method="POST" v-on:submit.prevent="CrearDoctor">
                        <div class="form-group">
                            <label for="recipient-Nombre" class="col-form-label">Nombre</label>
                            <input type="text" v-model="nuevodoc.Nombre" class="form-control" name="Nombre">
                            <label for="recipient-Apellidos" class="col-form-label">Apellidos:</label>
                            <input type="text" v-model="nuevodoc.Apellidos" class="form-control" name="Apellidos">
                            <label for="recipient-Cedula" class="col-form-label">Cedula:</label>
                            <input type="text" v-model="nuevodoc.Cedula" class="form-control" name="Cedula">
                            <label for="recipient-Especialidad" class="col-form-label">Especialidad:</label>
                            <input type="text" v-model="nuevodoc.Especialidad" class="form-control" name="Especialidad">
                            <label for="recipient-Direccion" class="col-form-label">Direccion:</label>
                            <input type="text" v-model="nuevodoc.Direccion" class="form-control" name="Direccion">
                            <label for="recipient-Telefono" class="col-form-label">Telefono:</label>
                            <input type="text" v-model="nuevodoc.Telefono" class="form-control" name="Telefono">
                            <label for="recipient-Zona" class="col-form-label">Zona:</label>
                            <input type="text" v-model="nuevodoc.Zona" class="form-control" name="Zona">
                            <label for="recipient-consulta" class="col-form-label">$ Consulta:</label>
                            <input type="text" v-model="nuevodoc.consulta" class="form-control" name="consulta">
                            <label for="recipient-consultadom" class="col-form-label">$ Consulta A Domicilio:</label>
                            <input type="text" v-model="nuevodoc.consultadom" class="form-control" name="consultadom">
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
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Datos Del Doctor {{editDocs.Nombre}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="updateDoctores(editDocs.id)">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text"  v-model="editDocs.Nombre" class="form-control" name="Nombre">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input type="text"  v-model="editDocs.Apellidos" class="form-control" name="Apellidos">
                            <label for="recipient-name" class="col-form-label">Cedula:</label>
                            <input type="text"  v-model="editDocs.Cedula" class="form-control" name="Cedula">
                            <label for="recipient-name" class="col-form-label">Especialidad:</label>
                            <input type="text" v-model="editDocs.Especialidad" class="form-control" name="Especialidad">
                            <label for="recipient-name" class="col-form-label">Direccion:</label>
                            <input type="text" v-model="editDocs.Direccion" class="form-control" name="Direccion">
                            <label for="recipient-name" class="col-form-label">Telefono:</label>
                            <input type="text" v-model="editDocs.Telefono" class="form-control" name="Telefono">
                            <label for="recipient-name" class="col-form-label">Zona:</label>
                            <input type="text" v-model="editDocs.Zona" class="form-control" name="Zona">
                            <label for="recipient-name" class="col-form-label">$ Consulta:</label>
                            <input type="text" v-model="editDocs.consulta" class="form-control" name="consulta">
                            <label for="recipient-name" class="col-form-label">$ Consulta A Domicilio:</label>
                            <input type="text" v-model="editDocs.consultadom" class="form-control" name="consultadom">
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
    <div class="modal fade" id="deletemateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Materia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>¿Esta seguro que quieres eliminar la materia <span class="badge badge-pill badge-warning">{{eliminardoc.Nombre}}</span>?</h4>
                            <!--{{materiadelete}}-->                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" @click="deleteDoctor(eliminardoc.id)">Eliminar</button>
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
            doctores: [],
            //guardar la emergencia
            nuevodoc:{
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
            //array para obtener eliminar una materia materia
            eliminardoc:[],
            //array para modificar una materia en especifico
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
        };
    },
    mounted() {
        this.getDoctores();
        console.log('Registros Cargados Con Exito')
    },
    methods: {
        CrearDoctor(){
            //declaramos la url
            let url="http://127.0.0.1:8000/admin/insertdocs";
            //genermos el post para guardar la materia
            axios.post(url,this.nuevodoc).then(response=>{
               //pasamos el nombrela materia y guardamos 
                this.getDoctores();
                this.nuevodoc.Nombre="";
                this.nuevodoc.Apellidos="";
                this.nuevodoc.Cedula="";
                this.nuevodoc.Especialidad="";
                this.nuevodoc.Direccion="";            
                this.nuevodoc.Zona="";
                this.nuevodoc.consulta="";
                this.nuevodoc.consultadom="";            
                //cerramos el modal
                $('#guardarModal').modal('hide')
                toastr.success('La materia se guardo con exito'); // se ejecuta la alerta
                this.getMaterias();
            }).catch(error=>{
                toastr.error('error al guardar');
            });
        },
        //función para obtener todas las    emergencias de /api/materia con axios
        getDoctores: function() {
            axios.get("http://127.0.0.1:8000/admin/listadoctores").then(response => {
                this.doctores = response.data.doctores;
                console.log (this.doctores);
            });
        },
        //función para obtener el id de la materia
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
        //función para editar Materia
        updateDoctores: function(id){
            //obtenemos el id de la materia
            var url = 'http://127.0.0.1:8000/admin/editdocs/' + id;
            //actualizamos la materia
            axios.put(url, this.editDocs).then(response =>{
                this.getDoctores();
                this.editDocs = { 
                    id: "", 
                    Nombre:"", 
                    Apellidos:"",
                    Cedula:"", 
                    Especialidad:"",
                    Direccion:"",
                    Telefono:"",
                    Zona:"",
                    consulta:"",
                    consultadom:"",
                };
                $('#updateModal').modal('hide');
            }).catch(error=>{
            });                
        },    
        deleteid(id){
            this.eliminardoc = id;
        },
        deleteDoctor(id) {
            var url = "http://127.0.0.1:8000/admin/deletedoc/" + id;
            axios.delete(url, this.eliminardoc).then (response=>{
                this.getDoctores();
                $('#updateModal').modal('hide');
            });            
        }
    }
};
</script>
