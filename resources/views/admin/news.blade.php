@extends('Layout.admindash')
@section('dashboard')

<div class="row">
    <div class="col-12">
        <h1>Section Berita</h1>

        <div class="top-right-button-container">
            <button type="button" class="btn btn-outline-success" data-toggle="modal"
                data-target="#exampleModal">
                Create
            </button>
            <div class="btn-group">
                <button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EXPORT
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="dataTablesCopy" href="#">Copy</a>
                    <a class="dropdown-item" id="dataTablesExcel" href="#">Excel</a>
                    <a class="dropdown-item" id="dataTablesCsv" href="#">Csv</a>
                    <a class="dropdown-item" id="dataTablesPdf" href="#">Pdf</a>
                </div>
            </div>
        </div>


        <div class="mb-2">
            <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                role="button" aria-expanded="true" aria-controls="displayOptions">
                Display Options
                <i class="simple-icon-arrow-down align-middle"></i>
            </a>
            <div class="collapse dont-collapse-sm" id="displayOptions">
                <div class="d-block d-md-inline-block">
                    <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                        <input class="form-control" placeholder="Search Table" id="searchDatatable">
                    </div>
                </div>
                <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                    <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        10
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">5</a>
                        <a class="dropdown-item active" href="#">10</a>
                        <a class="dropdown-item" href="#">20</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator"></div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
        <table id="datatableRows" class="data-table responsive nowrap"
            data-order="[[ 1, &quot;desc&quot; ]]">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Sales</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th class="empty">&nbsp;</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <p class="list-item-heading">Faworki</p>
                    </td>
                    <td>
                        <p class="text-muted">783</p>
                    </td>
                    <td>
                        <p class="text-muted">38</p>
                    </td>
                    <td>
                        <p class="text-muted">Desserts</p>
                    </td>
                    <td>
                        <label
                            class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">&nbsp;</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Kabuni</p>
                    </td>
                    <td>
                        <p class="text-muted">749</p>
                    </td>
                    <td>
                        <p class="text-muted">148</p>
                    </td>
                    <td>
                        <p class="text-muted">Cupcakes</p>
                    </td>
                    <td>
                        <label
                            class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">&nbsp;</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Buccellato</p>
                    </td>
                    <td>
                        <p class="text-muted">738</p>
                    </td>
                    <td>
                        <p class="text-muted">51</p>
                    </td>
                    <td>
                        <p class="text-muted">Desserts</p>
                    </td>
                    <td>
                        <label
                            class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">&nbsp;</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Vínarterta</p>
                    </td>
                    <td>
                        <p class="text-muted">711</p>
                    </td>
                    <td>
                        <p class="text-muted">49</p>
                    </td>
                    <td>
                        <p class="text-muted">Desserts</p>
                    </td>
                    <td>
                        <label
                            class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">&nbsp;</span>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress"
                            placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                            value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                            value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                            disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>

                    <button type="submit" class="btn btn-primary d-block mt-3">Sign in</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
