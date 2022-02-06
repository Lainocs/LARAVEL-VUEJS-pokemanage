<template>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="trainer in trainers" :key="trainer" @click="viewTrainer(trainer)">
                    <td>{{ trainer.name }}</td>
                    <td>{{ trainer.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        name: 'Trainers',
        props: [
            'trainers',
        ],

        methods: {
            viewTrainer(e) {
                this.$inertia.get(
                    this.route('trainers.show', {
                        id: e.id
                    }, {
                        preserveScroll: true
                    })
                )
            },
        }
    }
</script>