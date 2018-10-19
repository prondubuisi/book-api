@extends('layout.app')


@section('content')
<!-- Main Content -->
    <main class="main-content">

        


      
        <!-- Book List -->
        <div id="app" v-cloak >
        <div class="tc-padding" id="app">
            <div class="container">
                <div class="row">

                    

                    
                    <!-- Content -->
                    <div class="col-lg-12 col-md-8 col-xs-12 pull-right pull-none">

                        <!-- Book List Header -->
                        <div class="book-list-header">
                            
                            
                            <!-- Heading -->

                            <!-- Filter Nav -->
                            <div class="filter-tags-holder">
                                <ul id="filterbale-nav" class="option-set">
                                    <li><a class="selected" data-filter="*" href="#">Home</a></li>
                                    @guest
                                    <li><a data-filter=".business" href="/login">Login</a></li>
                                    <li><a data-filter=".science" href="/signup">Signup</a></li>
                                    @endguest
                                    <li><a data-filter=".science" href="/book">Upload book</a></li>
                                </ul>
                            </div>  
                            <!-- Filter Nav -->

                        </div>
                        <!-- Book List Header -->

                        <!-- Book List Widgets -->
                        <div id="filter-masonry" class="gallery-masonry" v-for = "(book) in books">   
                            <div class="book-list-widget masonry-grid business">
                                <span class="heart-batch"><i class="fa fa-heart"></i></span>
                                <div class="book-list-detail">
                                    <img :src="book.image" width="120" height="150" alt="">
                                    <div class="detail">
                                        
                                        <div class="book-name">
                                            <h5>@{{book.title}} <span>Good Read</span></h5><strong> &#8358;@{{book.price}}</strong>
                                        </div>
                                        <span>by @{{book.author}}</span>
                                        
                                        <p><span>@{{book.description}}</span></p>
                                    </div>
                                </div>
                                
                            
                        </div>
                        <!-- Book List Widgets -->


                    </div>
                    
                </div>

            </div>
            <!-- Single Product Detail -->

        </div>

        </div>
                    
            
    </main>
    <!-- Main Content -->

   <script src="/js/axios.js"></script>
   <script src="/js/vue.js"></script> 
   <script type="text/javascript" src="/js/app.js"></script>


@endsection