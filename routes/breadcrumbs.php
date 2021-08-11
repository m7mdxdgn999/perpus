<?php

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Branda', route('admin.dashboard'));
});

// Author Index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Penulis', route('admin.author.index'));
});




