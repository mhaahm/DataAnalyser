<template>
    <div class="page-inner page-inner-fill">

        <div id="board" class="board" data-toggle="sortable" data-draggable=".tasks" data-handle=".task-header" data-delay="100" data-force-fallback="true">
            <div class="task-parent">
                <section class="tasks">

                    <header class="task-header">
                        <h3 class="task-title mr-auto"> Import name <span class="badge text-muted">(3)</span>
                        </h3><!-- .btn -->
                        <button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task"><i class="fa fa-plus-circle"></i></button> <!-- /.btn -->
                        <!-- .dropdown -->
                        <div class="dropdown">
                            <!-- .btn -->
                            <button class="btn btn-light btn-icon text-muted" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button> <!-- /.btn -->
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Move</a> <a href="#!" class="dropdown-item">Duplicate</a> <a href="#!" class="dropdown-item">Subcribe</a> <a href="#!" class="dropdown-item">Trash</a>
                            </div><!-- /.dropdown-menu -->
                        </div>
                    </header>
                    <div class="task-body" data-toggle="sortable" data-group="tasks" data-delay="50" data-force-fallback="true">
                        <div class="task-issue">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title">
                                        <a href="#!" data-toggle="modal" data-target="#modalViewTask">Last date import</a>
                                    </h4>
                                    <h6 class="card-subtitle text-muted">
                                        <time class="text-muted">03:11</time> / <time class="text-muted">6:00</time> <span class="mx-1">·</span> <span class="due-date"><i class="far fa-fw fa-clock"></i> Apr 07</span>
                                    </h6>
                                </header>
                                <!-- .card-body -->
                                <div class="card-body pt-0">
                                    <!-- .list-group -->
                                    <div class="list-group">
                                        <!-- .list-group-item -->
                                        <a href="#!" class="list-group-item" data-toggle="modal" data-target="#modalViewTask">
                                            <!-- .list-group-item-body -->
                                            <div class="list-group-item-body">
                                                import desc
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="tasks">

                    <header class="task-header">
                        <h3 class="task-title mr-auto"> Import name <span class="badge text-muted">(3)</span>
                        </h3><!-- .btn -->
                        <button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task"><i class="fa fa-plus-circle"></i></button> <!-- /.btn -->
                        <!-- .dropdown -->
                        <div class="dropdown">
                            <!-- .btn -->
                            <button class="btn btn-light btn-icon text-muted" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button> <!-- /.btn -->
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Move</a> <a href="#!" class="dropdown-item">Duplicate</a> <a href="#!" class="dropdown-item">Subcribe</a> <a href="#!" class="dropdown-item">Trash</a>
                            </div><!-- /.dropdown-menu -->
                        </div>
                    </header>
                    <div class="task-body" data-toggle="sortable" data-group="tasks" data-delay="50" data-force-fallback="true">
                        <div class="task-issue">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title">
                                        <a href="#!" data-toggle="modal" data-target="#modalViewTask">Last date import</a>
                                    </h4>
                                    <h6 class="card-subtitle text-muted">
                                        <time class="text-muted">03:11</time> / <time class="text-muted">6:00</time> <span class="mx-1">·</span> <span class="due-date"><i class="far fa-fw fa-clock"></i> Apr 07</span>
                                    </h6>
                                </header>
                                <!-- .card-body -->
                                <div class="card-body pt-0">
                                    <!-- .list-group -->
                                    <div class="list-group">
                                        <!-- .list-group-item -->
                                        <a href="#!" class="list-group-item" data-toggle="modal" data-target="#modalViewTask">
                                            <!-- .list-group-item-body -->
                                            <div class="list-group-item-body">
                                                import desc
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="tasks">

                    <header class="task-header">
                        <h3 class="task-title mr-auto"> Import name <span class="badge text-muted">(3)</span>
                        </h3><!-- .btn -->
                        <button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task"><i class="fa fa-plus-circle"></i></button> <!-- /.btn -->
                        <!-- .dropdown -->
                        <div class="dropdown">
                            <!-- .btn -->
                            <button class="btn btn-light btn-icon text-muted" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button> <!-- /.btn -->
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Move</a> <a href="#!" class="dropdown-item">Duplicate</a> <a href="#!" class="dropdown-item">Subcribe</a> <a href="#!" class="dropdown-item">Trash</a>
                            </div><!-- /.dropdown-menu -->
                        </div>
                    </header>
                    <div class="task-body" data-toggle="sortable" data-group="tasks" data-delay="50" data-force-fallback="true">
                        <div class="task-issue">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title">
                                        <a href="#!" data-toggle="modal" data-target="#modalViewTask">Last date import</a>
                                    </h4>
                                    <h6 class="card-subtitle text-muted">
                                        <time class="text-muted">03:11</time> / <time class="text-muted">6:00</time> <span class="mx-1">·</span> <span class="due-date"><i class="far fa-fw fa-clock"></i> Apr 07</span>
                                    </h6>
                                </header>
                                <!-- .card-body -->
                                <div class="card-body pt-0">
                                    <!-- .list-group -->
                                    <div class="list-group">
                                        <!-- .list-group-item -->
                                        <a href="#!" class="list-group-item" data-toggle="modal" data-target="#modalViewTask">
                                            <!-- .list-group-item-body -->
                                            <div class="list-group-item-body">
                                                import desc
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="tasks">

                    <header class="task-header">
                        <h3 class="task-title mr-auto"> Import name <span class="badge text-muted">(3)</span>
                        </h3><!-- .btn -->
                        <button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task"><i class="fa fa-plus-circle"></i></button> <!-- /.btn -->
                        <!-- .dropdown -->
                        <div class="dropdown">
                            <!-- .btn -->
                            <button class="btn btn-light btn-icon text-muted" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button> <!-- /.btn -->
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Move</a> <a href="#!" class="dropdown-item">Duplicate</a> <a href="#!" class="dropdown-item">Subcribe</a> <a href="#!" class="dropdown-item">Trash</a>
                            </div><!-- /.dropdown-menu -->
                        </div>
                    </header>
                    <div class="task-body" data-toggle="sortable" data-group="tasks" data-delay="50" data-force-fallback="true">
                        <div class="task-issue">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title">
                                        <a href="#!" data-toggle="modal" data-target="#modalViewTask">Last date import</a>
                                    </h4>
                                    <h6 class="card-subtitle text-muted">
                                        <time class="text-muted">03:11</time> / <time class="text-muted">6:00</time> <span class="mx-1">·</span> <span class="due-date"><i class="far fa-fw fa-clock"></i> Apr 07</span>
                                    </h6>
                                </header>
                                <!-- .card-body -->
                                <div class="card-body pt-0">
                                    <!-- .list-group -->
                                    <div class="list-group">
                                        <!-- .list-group-item -->
                                        <a href="#!" class="list-group-item" data-toggle="modal" data-target="#modalViewTask">
                                            <!-- .list-group-item-body -->
                                            <div class="list-group-item-body">
                                                import desc
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

        </div><!-- /.board -->
    </div><!-- /.page-inner -->
</template>

<script>
    export default {
        name: 'importList',
    }
</script>