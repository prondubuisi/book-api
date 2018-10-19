

@extends('layout.auth')

@section('auth')
    <style type="text/css">
        h1,h2,h3{
            margin: 17px 5px !important;
        }
    </style>


   
  <div id="app" v-cloak>
      @{{errors}}
    <section class="mp-top-lead" style="height: 100%">
        <div class="inner" style="height: 100%">
            <div class="container-fluid">
                <div class="content">
                    
                    <div class="row ">
                        <div class="formbox col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

                             
                            <form action="https://www.mypadi.ng/login" method="post">
                                <input type="hidden" name="_token" value="iqp62utPIfhl0nwzTtdFccJSxibKk0Ji1umV9lK3">
                                
                                <div class="form-group">
                                    
                                    <input v-model="email" type="email" name="email" class="form-control" placeholder="Email address or phone number">
                                     <span class ="text-danger" v-if=" typeof errors.email != 'undefined'">@{{errors.email[0]}}</span>
                                    

                                </div>
                                <div class="form-group">
                                    <input v-model="password" type="password" name="password" class="form-control" placeholder="Password">
                                     <span class ="text-danger" v-if=" typeof errors.password != 'undefined'">@{{errors.password[0]}}</span>
                                </div>
                                <div class="form-group">
                                    <input @click.prevent="login" type="submit" role="button" class="btn btn-lg btn-block mp-btn big" value="LOGIN">
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
   <script type="text/javascript" src="/js/login.js"></script>
@endsection