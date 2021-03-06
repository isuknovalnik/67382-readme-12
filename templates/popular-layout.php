<div class="container">
    <h1 class="page__title page__title--popular">Популярное</h1>
</div>
<div class="popular container">
    <div class="popular__filters-wrapper">
        <div class="popular__sorting sorting">
            <b class="popular__sorting-caption sorting__caption">Сортировка:</b>
            <ul class="popular__sorting-list sorting__list">
                <li class="sorting__item sorting__item--popular">
                    <a class="sorting__link sorting__link--active" href="#">
                        <span>Популярность</span>
                        <svg class="sorting__icon" width="10" height="12">
                            <use xlink:href="#icon-sort"></use>
                        </svg>
                    </a>
                </li>
                <li class="sorting__item">
                    <a class="sorting__link" href="#">
                        <span>Лайки</span>
                        <svg class="sorting__icon" width="10" height="12">
                            <use xlink:href="#icon-sort"></use>
                        </svg>
                    </a>
                </li>
                <li class="sorting__item">
                    <a class="sorting__link" href="#">
                        <span>Дата</span>
                        <svg class="sorting__icon" width="10" height="12">
                            <use xlink:href="#icon-sort"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="popular__filters filters">
            <b class="popular__filters-caption filters__caption">Тип контента:</b>
            <ul class="popular__filters-list filters__list">
                <li class="popular__filters-item popular__filters-item--all filters__item filters__item--all">
                    <a class="filters__button filters__button--ellipse filters__button--all<?= (!$filters_type) ? ' filters__button--active' : ''; ?>" href="popular.php">
                        <span>Все</span>
                    </a>
                </li>
                <?php if ($posts_types): ?>
                    <?php foreach ($posts_types as $post_type): ?>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--<?= $post_type['icon_class']; ?><?=((int) $post_type['id'] === $filters_type) ? ' filters__button--active' : ''; ?> button" href="popular.php?id=<?= $post_type['id']; ?>">
                            <span class="visually-hidden"><?= $post_type['type_name']; ?></span>
                            <svg class="filters__icon" <?= icons_sizes($post_type['icon_class']); ?>>
                                <use xlink:href="#icon-filter-<?= $post_type['icon_class']; ?>"></use>
                            </svg>
                        </a>
                    </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="popular__posts">
        <?= $content; ?>
    </div>
    <div class="popular__page-links">
        <a class="popular__page-link popular__page-link--prev button button--gray" href="#">Предыдущая страница</a>
        <a class="popular__page-link popular__page-link--next button button--gray" href="#">Следующая страница</a>
    </div>
</div>
