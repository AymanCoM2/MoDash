<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit WIRE :</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body m-auto">
        <div>
            <form>
                <div class="row m-auto">
                    <div class="mb-3 col-sm-2">
                        <label for="ff" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="ff" aria-describedby=""
                            wire:model="userCode">
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">Password</label>
                        <input type="text" class="form-control" wire:model="accountType">
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">text</label>
                        <input type="text" class="form-control" wire:model="user_areaCode">
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">text</label>
                        <input type="text" class="form-control" wire:model="areacode">
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">text</label>
                        <input type="text" class="form-control" wire:model="user_auth_level">
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label"></label>
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
