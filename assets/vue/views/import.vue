<template>

    <div class="page-inner page-inner-fill">
        <div style="font-size: 14px!important;">
            <b-alert :show="alert.dismissCountDown"
                     dismissible
                     v-bind:variant="alert.type"
                     @dismissed="alert.dismissCountDown=0">
                <p><b>{{ alert.messageAlert }}</b></p>
            </b-alert>
        </div>
        <div class="card mt-5 mb-5">
            <!-- .steps -->
            <section class="steps steps-float">
                <ul>
                    <li v-bind:class="{ 'active' : stepImport == 1 , success : stepImport != 1}">
                        <a href="#!" tabindex="-1" class="js-step" container="confiImport" v-on:click="showStep(1)"><span class="step-indicator step-indicator-icon"><i class="oi oi-wrench"></i></span> <span class="d-none d-sm-inline">Import Configuration</span></a>
                    </li>
                    <li v-bind:class="{ 'active' : stepImport == 2 , success : stepImport != 2}">
                        <a href="#!" tabindex="-1" class="js-step" container="uploadFile" v-on:click="showStep(2)"><span class="step-indicator step-indicator-icon"><i class="oi oi-data-transfer-upload"></i></span> <span class="d-none d-sm-inline">Upload File</span></a>
                    </li>
                    <li v-bind:class="{ 'active' : stepImport == 3 , success : stepImport != 3}">
                        <a href="#!" tabindex="-1" class="js-step" container="preview" v-on:click="showStep(3)"><span class="step-indicator step-indicator-icon"><i class="oi oi-dashboard"></i></span> <span class="d-none d-sm-inline">Report</span></a>
                    </li>
                    <li v-bind:class="{ 'active' : stepImport == 4 , success : stepImport != 4}">
                        <a href="#!" tabindex="-1" class="js-step" container="report" v-on:click="showStep(4)"><span class="step-indicator step-indicator-icon"><i class="oi oi-list"></i></span> <span class="d-none d-sm-inline">Preview</span></a>
                    </li>
                </ul>
            </section>

            <div class="card-body activeStep js-card" id="confiImport" v-show="stepImport == 1" style="padding-top: 50px;">
               <form id="importFormCaracterstique" @submit.prevent="validateForm">
                    <div class="form-row">
                        <div class="col-md-3 mb-2">
                            <label for="firstName">Import Title</label>
                            <input type="text" class="form-control" id="firstName" required="" v-model="importDesc.title">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label class="control-label" for="flatpickr01">Import Date</label>
                            <input id="flatpickr01" type="text" class="form-control flatpickr-input" data-toggle="flatpickr" readonly="readonly" v-bind:data-default-date="importDesc.dateImport" v-model="importDesc.dateImport">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Import description</label>
                            <vue-summernote ref="textDesc"></vue-summernote>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <button class="btn btn-success" @click.prevent="saveImports">Save Import</button>
                        </div>
                    </div>
               </form>
            </div>
            <div class="card-body disableStep js-card" id="uploadFile" v-show="stepImport == 2">
                <div class="form-row">
                    <div class="form-group">
                        <form enctype="multipart/form-data" @change="filesChange($event.target.name, $event.target.files);">
                            <label for="tf3">Upload Import file</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="tf3" multiple="">
                                <label class="custom-file-label" for="tf3">Choose file</label>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-success" @click.prevent="uploadFile" style="margin-top: 25px;margin-left: 15px;">Upload file</button>
                </div>
            </div>

            <div class="card-body disableStep js-card" id="preview" v-show="stepImport == 3">
                <div class="form-group">
                    <div class="input-group input-group-alt">
                        <div class="input-group has-clearable">
                            <button id="clear-search" type="button" class="close" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                            </button>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                            </div>
                            <input id="table-search" type="text" class="form-control" placeholder="Search products">
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalFilterColumns">Filter Columns</button>
                        </div>
                    </div>
                </div>
                <table id="myTable" class="table">
                    <!-- thead -->
                    <thead>
                    <tr>
                        <th colspan="2" style="min-width: 320px;">
                            <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                                <div class="thead-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-caret-down"></span>
                                </div>
                                <div class="dropdown-arrow"></div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#!">Select all</a> <a class="dropdown-item" href="#!">Unselect all</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Bulk remove</a> <a class="dropdown-item" href="#!">Bulk edit</a> <a class="dropdown-item" href="#!">Separate actions</a>
                                </div>
                            </div>
                        </th>
                        <th> Inventory </th>
                        <th> Variants </th>
                        <th> Prices </th>
                        <th> Sales </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                    </thead><!-- /thead -->
                </table><!-- /.table -->
            </div>

            <div class="card-body disableStep js-card" id="report" v-show="stepImport == 4">
                report
            </div>
        </div>
    </div>
</template>

<script>
    import modal from "../components/Modal.vue";
    //import Simplert from 'vue2-simplert'
    export default {
        name: 'import',
        components: {modal},
        data: function() {
            let currentDate = new Date();
            let defaultDate = currentDate.getFullYear()+"/"+(currentDate.getMonth() + 1)+"/"+currentDate.getDate()
            return {
                stepImport: 1,
                importDesc: {
                    title:'',
                    dateImport : defaultDate,
                    textDesc : ""
                },
                alert:{
                    dismissCountDown : 0,
                    messageAlert: "",
                    type : 'danger'
                }

            }
        },
        methods: {
            showStep : function(id) {
                this.stepImport = id;
            },
            saveImports: function() {
                // save form
                this.$store.dispatch('imports/createImports', this.importDesc)
                    .then(() => {
                        this.stepImport = 2;
                    })
            },
            validateForm: function () {
                this.importDesc.textDesc = this.getVal();
            },
            getVal () {
                return this.$refs.textDesc.run('code')
            },
            filesChange(name,file)
            {
                let formData = new FormData();
                Array
                    .from(Array(file.length).keys())
                    .map(x => {
                        formData.append('fileimport', file[x], file[x].name);
                    });
                this.formData = formData;
            },
            showAlert : function(message) {
                this.alert = {
                    dismissCountDown : 7,
                    messageAlert: message,
                    type : 'danger'
                };
            },
            uploadFile()
            {
                if(this.importDesc.title == '') {
                    this.showAlert("Il faut créer un import avant d'uploader le fichier");
                }
                // send data to server
                this.$store.upload(this.formData);

            }

        },
        mounted() {
            this.$store.dispatch('imports/fetchImports')
                .then(() => {})
        }
    }
</script>