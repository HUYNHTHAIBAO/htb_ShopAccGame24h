<?php

// Admin
Breadcrumbs::for('backend.home.index', function ($trail) {
    $trail->push('Trang chủ', route('backend.home.index'));
});
// Trang chủ > Danh mục game
Breadcrumbs::for('backend.category.index', function ($trail) {
    $trail->parent('backend.home.index');
    $trail->push('Danh mục game', route('backend.category.index'));
});
// Trang chủ > Danh mục game > Thêm mới
Breadcrumbs::for('backend.category.create', function ($trail) {
    $trail->parent('backend.category.index');
    $trail->push('Thêm mới');
});
// Trang chủ > Danh mục game > Cập nhật
Breadcrumbs::for('backend.category.edit', function ($trail) {
    $trail->parent('backend.category.index');
    $trail->push('Cập nhật');
});
