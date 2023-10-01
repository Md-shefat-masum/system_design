<template>
    <div>
        <top-header></top-header>
        <!--Page Body Start-->
        <div class="page-body-wrapper">
            <router-view></router-view>
        </div>
        <!--Page Body Ends-->
    </div>
</template>

<script>
import SideBar from './components/sidebar/SideBar.vue'
import TopHeader from './components/TopHeader.vue'
import { mapActions } from 'pinia'
import { use_auth_store } from "../store/auth_store"

export default {
    components: { TopHeader, SideBar },
    created: async function () {
        console.log('Component mounted.');
        let check = await this.check_is_auth();
        console.log(check);
    },
    methods: {
        ...mapActions(use_auth_store, ['check_is_auth'])
    }
}
</script>
