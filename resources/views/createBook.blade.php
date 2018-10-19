@extends('layout.auth')

@section('auth')
    <style type="text/css">
        h1,h2,h3{
            margin: 17px 5px !important;
        }
    </style>


   
  
  <div id="app" v-cloak>

    <section class="mp-top-lead" style="height: 100%">
        <div class="inner" style="height: 100%">
            <div class="container-fluid">
                <div class="content">
                    
                    <div class="row ">
                        
                        <div class="formbox col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

                             
                            <form action="" method="post"  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="iqp62utPIfhl0nwzTtdFccJSxibKk0Ji1umV9lK3">
                                
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Book Title" v-model="title">
                                    <span class ="text-danger" v-if=" typeof errors.title != 'undefined'">@{{errors.title[0]}}</span>
                                </div>
                                 <div class="form-group">
                                    <input type="text" name="author" class="form-control" placeholder="Enter the Name of Author" v-model="author">
                                    <span class ="text-danger" v-if=" typeof errors.author != 'undefined'">@{{errors.author[0]}}</span>
                                </div>
                                <div class="form-group">
                        
    <label for="exampleFormControlTextarea1">Book description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="description"></textarea>
    <span class ="text-danger" v-if=" typeof errors.description != 'undefined'">@{{errors.description[0]}}</span>
  </div>
                                <div class="form-group">
                                    <input type="text" name="author" class="form-control" placeholder="Enter Book Price" v-model="price">
                                    <span class ="text-danger" v-if=" typeof errors.price != 'undefined'">@{{errors.price[0]}}</span>
                                </div>
                                <div class="form-group">
   <div class="form-group">
    <label for="exampleFormControlFile1">Upload book cover image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" v-on:change="onImageChange">
  </div>
                                <div class="form-group">
                                    <input @click.prevent="formSubmit" type="submit" role="button" class="btn btn-lg btn-block mp-btn big" value="Upload Book">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row cta">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
   <script src="/js/axios.js"></script>
   <script src="/js/vue.js"></script> 
   <script type="text/javascript" src="/js/upload.js"></script>

 @endsection