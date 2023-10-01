<template>
    <div class="container-fluid">
        <!-- Container-fluid starts -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>All Messages</h5>
                        <div>
                            <router-link class="btn btn-outline-warning btn-sm" :to="{name:`ContactMessageCreate`}">Create</router-link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-start">SL</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="i in 10" :key="i">
                                    <td class="text-start">{{ i }}</td>
                                    <td>asd</td>
                                    <td>asdf</td>
                                    <td>asdf</td>
                                    <td>asdf</td>
                                    <td style="width: 100px;">
                                        <div class="d-flex justify-content-end gap-2" >
                                            <router-link class="btn btn-sm btn-outline-success px-2" :to="{name: `ContactMessageEdit`, params:{id: 1}}">
                                                <i class="fa fa-eye"></i>
                                            </router-link>
                                            <router-link class="btn btn-sm btn-outline-warning px-2" :to="{name: `ContactMessageEdit`, params:{id: 1}}">
                                                <i class="fa fa-pencil"></i>
                                            </router-link>
                                            <router-link class="btn btn-sm btn-outline-danger px-2" :to="{name: `ContactMessageEdit`, params:{id: 1}}">
                                                <i class="fa fa-trash"></i>
                                            </router-link>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts -->
    </div>
</template>

<script>
export default {

}
</script>

<style></style>
