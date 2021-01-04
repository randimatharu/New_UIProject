<form action="#">

    <div class="form-group row">
        <div class="col-md-9">
            <button type="button" class="btn btn-danger">Save </button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
    </div>
    <!-- <div class="accordion_container"> -->
    <div class="accordion_head">GENERAL INFORMATION<span class="plusminus">+</span></div>
    <div class="accordion_body" style="display: none;">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name: </label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="office_phone" class="col-sm-3 col-form-label">Office Phone: </label>
                        <div class="col-sm-9">
                            <input type="text" name="office_phone" id="office_phone" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="input_fields_wrap">


                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <button class="add_field_button btn btn-danger">+</button>
                            </div>
                        </div>

                        <!-- Repeted Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Email Address:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email[]"
                                            placeholder="email@example.com" id="email[]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="primary" id="primary"
                                        value="Primary">
                                    <label class="form-check-label" for="inlineRadio1">Primary</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="opted_out" name="opted_out"
                                        value="opted_out">
                                    <label class="form-check-label" for="inlineCheckbox2">Opted Out</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="invalid" name="invalid"
                                        value="invalid">
                                    <label class="form-check-label" for="inlineCheckbox3">Invalid</label>
                                </div>
                            </div>
                        </div>
                        <!-- End Repeted Row -->

                    </div>
                </div>

            </div>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="website" class="col-sm-3 col-form-label">Website: </label>
                        <div class="col-sm-9">
                            <input type="text" name="website" id="Fax:" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="fax" class="col-sm-3 col-form-label">Fax:</label>
                        <div class="col-sm-9">
                            <input type="text" name="fax" id="fax" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion_head">MORE INFORMATION<span class="plusminus">+</span>
    </div>
    <div class="accordion_body" style="display: none;">
        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Type:</label>
                <div class="col-md-9">
                    <select class="form-control">
                        <option></option>
                        <option>Analyst</option>
                        <option>Competitor</option>
                        <option>Customer</option>
                        <option>Integrator</option>
                        <option>Investor</option>
                        <option>Partner</option>
                        <option>Press</option>
                        <option>Prospect</option>
                        <option>Reseller</option>
                        <option>Other</option>
                    </select>
                    <!-- <input type="text" class="form-control" name="name"  autocomplete="off"/> -->
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Industry:</label>
                <div class="col-md-9">
                    <select class="form-control">
                        <option></option>
                        <option>Apparel</option>
                        <option>Banking</option>
                        <option>Biotechnology</option>
                        <option>Chemicals</option>
                        <option>Communications</option>
                        <option>Construction</option>
                        <option>Consulting</option>
                        <option>Education</option>
                        <option>Electronics</option>
                        <option>Energy</option>
                        <option>Engineering</option>
                        <option>Entertainment</option>
                        <option>Environmental</option>
                        <option>Finance</option>
                        <option>Government</option>
                        <option>Healthcare</option>
                        <option>Hospitality</option>
                        <option>Insurance</option>
                        <option>Machinery</option>
                        <option>Manufacturing</option>
                        <option>Media</option>
                        <option>Not For Profit</option>
                        <option>Recreation</option>
                        <option>Retail</option>
                        <option>Shipping</option>
                        <option>Technology</option>
                        <option>Telecommunications</option>
                        <option>Transportation</option>
                        <option>Utilities</option>
                        <option>Other</option>
                    </select>
                    <!-- <input type="text" class="form-control" name="name"  autocomplete="off"/> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Member of:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-4">
                    <button type="button" class="fa fa-mouse-pointer btn btn-danger" onclick="member_of()"></button>
                    <button type="reset" class="fa fa-times btn btn-danger"></button>
                </div>
            </div>
        </div>

    </div>

    <div class="accordion_head">ADDRESS INFORMATION<span class="plusminus">+</span>
    </div>
    <div class="accordion_body" style="display: none;">

        <div class="row">
            <div class="form-group col-md-6">
                <h6 class="example-title">Billing Address</h6>
            </div>

            <div class="form-group col-md-6">
                <h6 class="example-title">Shipping Address</h6>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Street: </label>
                <div class="col-md-9">
                    <textarea class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Street: </label>
                <div class="col-md-9">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">City: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">City: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">State/Region: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">State/Region: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Postal Code: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Postal Code: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Country: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Country: </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
            </div>

            <div class="form-group col-md-6">
                <label class="col-md-3 col-form-label">Copy address from left:</label>
                <div class="checkbox-custom checkbox-default">
                    <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox" autocomplete="off" />
                </div>
            </div>
        </div>


    </div>

    <div class="accordion_head">DATA ASSIGNMENT<span class="plusminus">+</span>
    </div>
    <div class="accordion_body" style="display: none;">

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 col-form-label">Assigned to: </label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="name" autocomplete="off" />
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-4">
                    <button type="button" class="fa fa-mouse-pointer btn btn-danger" onclick="assigned_to()"></button>
                    <button type="reset" class="fa fa-times btn btn-danger"></button>
                </div>
            </div>

        </div>

    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-9">
            <button type="button" class="btn btn-danger">Save </button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
    </div>
    <!-- </div> -->
</form>

<script>
function member_of() {
  var myWindow = window.open("member_of.php", "", "width=800,height=900");
}

function assigned_to() {
  var myWindow = window.open("assigned.php", "", "width=800,height=900");
}
</script>