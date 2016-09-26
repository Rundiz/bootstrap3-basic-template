<?php require 'php-inc/inc_html_head.php'; ?> 

        <main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row row-with-vspace">
                    <article class="col-xs-12">
                        <header class="page-header">
                            <h1>Dropdowns</h1>
                        </header>


                        <h2>Example</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                            Dropdown ดรอปดาวน์
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation" class="dropdown-header">Dropdown header</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation" class="dropdown-header">หัวข้อภาษาไทย</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ลิ้งค์ภาษาไทย</a></li>
                                            <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">ลิ้งค์ปิดใช้งาน</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropdown clearfix">
                                        <button class="btn btn-default dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
                                            Dropdown clicked
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-2" role="menu" aria-labelledby="dropdownMenu2">
                                            <li role="presentation" class="dropdown-header">Dropdown header</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                            <li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="#">Active item</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation" class="dropdown-header">หัวข้อภาษาไทย</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ลิ้งค์ภาษาไทย</a></li>
                                            <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">ลิ้งค์ปิดใช้งาน</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 