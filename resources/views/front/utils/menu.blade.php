<nav>

    <ul class="sf-menu">
        <li id="menu-item-4092" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-105 current_page_item menu-item-4092">
            <a href="{{ url('/') }}" aria-current="page">Accueil</a></li>
        <li id="menu-item-4090" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sf-with-ul menu-item-4090">
            <a href="../boutique/index.html">Boutique
<span class="sf-sub-indicator">
<i class="fa fa-angle-down icon-in-menu"></i>
</span>
</a>
        <ul class="sub-menu">
            
            @foreach(App\Category::all() as $category)
                <li id="menu-item-4100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4100">
                    <a href="{{url('category-list', $category->id)}}">{{$category->name}}</a>
                </li>
            @endforeach
            
        </ul>
        </li>
        <li id="menu-item-4089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4089"><a href="../a-propos/index.html">A propos</a></li>
        <li id="menu-item-4091" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4091"><a href="../contact/index.html">Contact</a></li>
    </ul>

    <ul class="buttons sf-menu" data-user-set-ocm="off">

        <li id="nectar-user-account">
            <div><a href="../my-account/index.html"><span class="icon-salient-m-user"
aria-hidden="true"></span></a></div>
        </li>
        <li class="nectar-woo-cart">
            <div class="cart-outer" data-user-set-ocm="off" data-cart-style="dropdown">
                <div class="cart-menu-wrap">
                    <div class="cart-menu">
                        <a class="cart-contents" href="../cart/index.html">
                            <div class="cart-icon-wrap"><i class="icon-salient-cart"></i>
                                <div class="cart-wrap"><span>0 </span></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cart-notification">
                    <span class="item-name"></span> was successfully added to your cart. </div>

                <div class="widget woocommerce widget_shopping_cart">
                    <h2 class="widgettitle">Panier</h2>
                    <div class="widget_shopping_cart_content"></div>
                </div>
            </div>

        </li>
    </ul>

</nav>