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
                    <a href="'usuarios/agenda-cita/'$doctores.id" >
                        <button type="button" class="btn btn-info">
                            Agendar Cita
                        </button>
                    </a>
                </th>                           
            </tr>                           
        </tbody>
    </table>
    
</div>   
</template>
<script>
export default {
    data() {
        return {
            //array para obtener todos las  doctores
            doctores: [],            
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
    }
};
</script>
