<style>
    .sidenav {
        height: 100%;
        width:300px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav li {
        padding: 8px 0px 8px 0px;
        text-decoration: none;
        font-size: 16px;
        color: #818181;
        display: block;
        transition: 0.3s
    }
    /* The navigation menu links */


    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover, .offcanvas a:focus{
        color: #f1f1f1;
        background: red;
    }

    /* Position and style the close button (top right corner) */


    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        padding: 20px;

    }

    ul{
       list-style-type: none;
    }

    li.padded{
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
</style>


<ul id="slide-out" class="sidenav sidenav-fixed">
    <h4 class="white-text flow-text center">
        𝔭𝔯𝔬𝔧𝔢𝔠𝔱 𝔱𝔯𝔞𝔠𝔨𝔢𝔯
    </h4>

    <a href="<?= \yii\helpers\Url::toRoute('/user/admin') ?>"><li class="padded collection-item"> Users</li></a>
    <a href="<?= \yii\helpers\Url::toRoute('/project/') ?>"><li class="padded collection-item">Projects</li></a>
    <a href=""><li class="padded collection-item">Alvin</li></a>
    <a href=""><li class="padded collection-item">Alvin</li></a>

</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>


<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

