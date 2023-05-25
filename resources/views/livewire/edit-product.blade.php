<div>
<section class="content-main">
                <div class="row">
                    <div class="col-9">
                        <div class="content-header">
                            <h2 class="content-title">Edit Product</h2>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                             
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="UpdateProduct"  enctype="multipart/form-data">
                                    <div class="mb-4">
                                    <!-- <input type="text" placeholder="Type here"   class="form-control" id="product_name" wire:model="id" /> -->

                                        <label for="product_name" class="form-label">Product title</label>
                                        <input type="text" placeholder="Type here"   class="form-control" id="product_name" wire:model="name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Full description</label>
                                        <textarea placeholder="Type here"  class="form-control"  rows="4" wire:model="description"></textarea>
                                    </div>
                                    <div class="row">
                                        
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Price</label>
                                        <input type="text" placeholder="Type here"  class="form-control" id="product_name" wire:model="price" /> 
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Category</label>
                                        
                                      

                                     <select class="form-control" wire:model="category_id">
                                        <option value="">Choose category</option>
                                        @foreach($Categoreis as $Category)
                                            <option value="{{ $Category->id}}" >
                                                {{ $Category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Sub-Category</label>
                                        <select class="form-control" wire:model="SubCat_id">   
                                        <option value="">choose Sub category</option>
                                        @foreach($SubCategory as $SubCategory)   

                                            <option value="{{$SubCategory->id}}">{{$SubCategory->name}}</option>
        
                                            @endforeach
                                             </select>                                    </div>
                                    <div class="mb-4">
                                        <label for="" class="form-label">image product</label>
                                        <input type="file" placeholder="Type here" class="form-control" id="" wire:model="imageProduct" />
                                        @error('imageProduct') <span class="error">{{ $message }}</span> @enderror
                                        <img src="{{asset('attachments/'. $imageProduct)}}" />
                                    </div>
                                        
                                    </div>

                                    
                                    <button type="submit" class="btn btn-md rounded font-sm hover-up">update</button>
                                </form>
                            </div>
                        </div>


                        
                        <!-- card end// -->
                       
                        <!-- card end// -->
                    </div>
                   
                </div>
            </section>
</div>

