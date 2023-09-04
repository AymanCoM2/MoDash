<div wire:ignore.self class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit WIRE :</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body m-auto">
        <div>
            <form wire:submit.prevent id="sheetForm">
                <div class="row m-auto">
                    <div class="mb-3 col-sm-2">
                        <label for="ff" class="form-label">User Code:</label>
                        <input type="text" class="form-control" id="ff" wire:model="userCode">
                    </div>
                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">Account Type:</label>
                        <select class="form-select" aria-label="Default select example" wire:model="accountType">
                            <option value=""></option>
                            {{-- // TODO --}}
                            {{-- Note : Those empty options important for nulls --}}
                            <option value="Admin">Admin</option>
                            <option value="Manger">Manger</option>
                            <option value="Sales">Sales</option>
                        </select>
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">User Area Code:</label>
                        <input type="text" class="form-control" wire:model="user_areaCode">
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">Area Code:</label>
                        <select class="form-select" aria-label="Default select example" wire:model="areacode">
                            <option value=""></option>
                            <option value="south">south</option>
                            <option value="ryad">ryad</option>
                            <option value="Qasim">Qasim</option>
                            <option value="kosim">kosim</option>
                            <option value="west">west</option>
                        </select>
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label">Auth Level:</label>
                        <select class="form-select" aria-label="Default select example" wire:model="user_auth_level">
                            <option value=""></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="mb-3 col-sm-2">
                        <label for="" class="form-label"></label>
                        <button type="submit" class="btn btn-primary form-control"
                            wire:click="updateMandoobData()">Update</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col">
                User Name :{{ $userName }}
            </div>
            <div class="col">
                Email :{{ $userEmail }}
            </div>
        </div>
    </div>
</div>
