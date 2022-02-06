<template>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="ability in pokeabilities" :key="ability">
                    <td>{{ ability.name }}</td>
                    <td>{{ability.poketype.name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        name: 'Abilities',
        props: [
            'pokeabilities',
        ]
    }
</script>