<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
   
</head>
<!--end::Head--> 

<body>

<style>
        .dataTables_filter{
            display:none;
            
        }
    </style>
    <script>
        function borra() {
//alert("hola");
nombre = document.getElementById("check3").value;
document.getElementById("valores").value = nombre;

}
    </script>

        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Lista de usuarios</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Gestion de usuarios</li>
                            <!--end::Item-->
                            <!--begin::Item--> 
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Lista de usuarios</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->



            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title--> 
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar usuario" />
                                    <span style="color:red; font-weight:bolder;">{{$nota}}</span>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                              

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                        <i class="ki-duotone ki-plus fs-2"></i>Añadir usuario</button>
                                    <!--end::Add user-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                             
                                <!--end::Group actions-->
                                <!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Exportar usuarios</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                    <i class="ki-duotone ki-cross fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_export_users_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">Exportar por roles:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="role" data-control="select2" data-placeholder="Seleccione un rol" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                            <option value="Administrator">Administrator</option>
                                                            <option value="Gerente general">Gerente general</option>
                                                            <option value="Gerente general">Gerente financiero</option>
                                                            <option value="Jefe de digitado">Jefe de digitado</option>
                                                            <option value="Jefe de atencion al cliente">Jefe de atencion al cliente</option>
                                                            <option value="Cajero">Cajero</option>
                                                            <option value="Digitador">Digitador</option>
                                                            <option value="Atencion al cliente">Atencion al cliente</option>
                                                            <option value="Operario">Operario</option>
                                                            <option value="Repartidor">Repartidor</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Seleccione el formato de exportación:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="format" data-control="select2" data-placeholder="Seleccione un formato" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                            <option value="excel">Excel</option>
                                                            <option value="pdf">PDF</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                            <span class="indicator-label">Exportar</span>
                                                            <span class="indicator-progress">Espere por favor...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->


                                <!--end::Modal - Add task-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <form class="form" action="/usuarios/eliminartodo/" method="POST">
                                @csrf
                                @method('GET')
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" id="check33" name="checked[]" data-kt-check-target="#kt_table_users .form-check-input" />
                                            </div>
                                        </th>
                                        <th class="min-w-100px">Usuario</th>
                                        <th class="min-w-50px">Rol</th>
                                        <th class="min-w-50p0px">Ultimo acceso</th>
                                        <th class="min-w-50p0px">Sesion</th>
                                        <th class="min-w-50p0px">Fecha De Incorporación</th>
                                        <th class="text-center min-w-50p0px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                   <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" id="check3" name="checked[]" onclick="borra()"/>
                                            </div>
                                        </td>
                                        <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ url('/usuarios/view') }}">
                                                    <div class="symbol-label">
                                                        <img src="/fotos/" alt="" class="w-100" />
                                                    </div> 
                                                </a>
                                            </div>
                                            <!--end::Avatar--> 
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="/usuarios/view/" class="text-gray-800 text-hover-primary mb-1"></a>
                                                <span></span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <td>
                                           
                                        </td>
                                        <td>
                                        
                                            <div class="badge badge-light fw-bold">  </div>
                                        </td>
                                        <td>
                                            
                                      
                                            
                                        </td>
                                        <td>
                                        
                                            </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acción
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="/usuarios/view/" class="menu-link px-3">Editar</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="/usuarios/eliminar/" class="menu-link px-3" data-kt-users-table-filter="delete_row">Borrar</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        </tr>
                                      
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-user-table-select="selected_count"></span>Seleccionado
                                    </div>
                                    

                                                  
                                                
                                                    <input type="text" name="valores" id="valores" hidden>
                                    
                                    <button type="submit" class="btn btn-danger">Eliminar seleccionado</button>
                                  
                               
                                </div>




                            </form>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->






</body>
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>

<script>
    function valor() {

        nombre = document.getElementById("name").value;

        nom = document.getElementById("ema" + nombre).value;

        document.getElementById("email").value = nom;

    }
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
<script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

<script>
         
        $(document).ready(function () {
    $('#usuarios').DataTable(
        {
           
            language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },

        dom: 'tri<"pagina1" p>',
        
        
       
       

        } 
    );
}); 
    </script>


</html>