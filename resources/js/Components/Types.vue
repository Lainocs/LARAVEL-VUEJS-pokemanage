<template>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="poketype in poketypes" :key="poketype">
                    <td>{{ poketype.name }}</td>
                    <td>{{ poketype.color }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        name: 'Types',
        props: [
            'poketypes',
        ]
    }
</script>