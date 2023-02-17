    <div class="col-md-10">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif

        </div>

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Add Plans</h3>
            </div>

            
            <div class="card-body">
                <form wire:submit.prevent="addPlans">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Plan Name</label>
                                <input type="text" wire:model="planname" class="form-control" placeholder="Enter ...">
                                @error('planname') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" wire:model="price" class="form-control" placeholder="Enter ...">
                                @error('price') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>How many properties</label>
                                <input type="number" wire:model="noproperties" class="form-control" placeholder="How Many Price">
                                @error('noproperties') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"  wire:model="description" rows="3" placeholder="Enter ..."></textarea>
                                @error('description') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <button class="btn btn-md btn-primary float-right">Create</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>

