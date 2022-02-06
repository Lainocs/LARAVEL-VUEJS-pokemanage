<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pokemanage Admin
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <nav class="admin-nav">
                    <ul>
                        <li v-for="item in items" :key="item.id" @click="changeActive(item.id)" :class="{active: item.active}">
                            <a>
                                {{ item.name }}
                            </a>
                        </li>
                    </ul>
                </nav>
                <div>
                    <Trainers v-if="activePage == 1" :trainers="trainers" />
                    <Abilities v-if="activePage == 2" :pokeabilities="pokeabilities" />
                    <Types v-if="activePage == 3" :poketypes="poketypes" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Trainers from '@/Components/Trainers.vue'
    import Abilities from '@/Components/Abilities.vue'
    import Types from '../Components/Types.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Trainers,
            Abilities,
            Types,
        },
        props: [
            'trainers',
            'poketypes',
            'pokeabilities',
            'showData',
        ],
        data() {
            return {
                items: [
                    { id: 1, name: "Trainers", active: true },
                    { id: 2, name: "Abilities", active: false },
                    { id: 3, name: "Types", active: false },
                ],
                activePage: 1,
            }
        },
        methods: {
            changeActive(id) {
                this.items.forEach(item => {
                    if (item.id === id) {
                        item.active = true
                        this.activePage = id
                    }
                    else {
                        item.active = false
                    }
                });
            },
        }
    })
</script>

<style>
    .admin-nav {
        margin-bottom: 50px;
    }

    .admin-nav ul {
        display: flex;
        gap: 1rem;
        align-items: center;
        justify-content: center;
        padding: 0.5rem;
    }

    .admin-nav ul li {
        list-style: none;
        padding: 0 0.5rem;
        cursor: pointer;
        border-radius: 0.25rem;
        border: 1px solid #eaeaea;
        transition: all 0.2s ease-in-out;
    }

    .active {
        background: #41B883;
    }
</style>
