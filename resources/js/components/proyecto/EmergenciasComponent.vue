<template>
    <table class="table table-hover table-striped">
                    <thead>
                        <tr>                            
                            <th>Institucion</th>
                            <th>Zona</th>
                            <th>No. Telefono</th>
                            <th>Llamar</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr v-for="emergencia in emergencias" :key="emergencia.id">
                            <th v-text="emergencia.Institucion"></th>
                            <th v-text="emergencia.Zona"></th>
                            <th v-text="emergencia.Telefono"></th>
                            <a href="tel:$emergencias.Telefono">
                                <img src="https://image.flaticon.com/icons/png/512/40/40316.png" width="20">
                            </a>
                        </tr>                           
                    </tbody>
                </table>
</template>
<script>
export default {
    data() {
        return {
            //array para obtener todos las  emergencias
            emergencias: []
        };
    },
    mounted() {
        this.getEmergencias();
        console.log('Registros Cargados Con Exito')
    },
    methods: {
        //función para obtener todas las    emergencias de /api/materia con axios
        getEmergencias: function() {
            axios.get("http://127.0.0.1:8000/usuarios/listaemergencias").then(response => {
                this.emergencias = response.data.emergencias;
                console.log (this.emergencias);
            });
        }
    }
};
</script>
