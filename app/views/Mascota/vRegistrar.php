<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h6 class="mb-3">Tooltips</h6>

        <form class="needs-validation mb-5" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip001">First name</label>
                    <input type="text" class="form-control" id="validationTooltip001" placeholder="First name"
                        value="Mark" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip002">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip002" placeholder="Last name"
                        value="Otto" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername2">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername2" placeholder="Username"
                            aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique username.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip003">City</label>
                    <input type="text" class="form-control" id="validationTooltip003" placeholder="City" required>
                    <div class="invalid-tooltip">
                        Please provide a city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">State</label>
                    <input type="text" class="form-control" id="validationTooltip004" placeholder="State" required>
                    <div class="invalid-tooltip">
                        Please provide a state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip005">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip005" placeholder="Zip" required>
                    <div class="invalid-tooltip">
                        Please provide a zip.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
<?php require RUTA_APP .'/views/inc/Footer.php';?>