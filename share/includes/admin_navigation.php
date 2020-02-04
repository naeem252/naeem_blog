<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url_for("admin/");?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for("admin/");?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                    </a>
                    <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="<?php echo url_for("admin/posts.php?post=all");?>">All Post</a>
                        <a class="dropdown-item" href="<?php echo url_for("admin/posts.php?post=add");?>">Add Post</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu bg-light hover" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">All Users</a>
                        <a class="dropdown-item" href="#">Add User</a>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for("admin/logout.php")?>">Log Out</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>