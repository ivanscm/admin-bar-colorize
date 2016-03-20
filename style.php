<style>
/* Admin Bar */
#wpadminbar {
  color: <?php _abc_color('text'); ?>;
  background: <?php _abc_color('primary'); ?>;
}

#wpadminbar .ab-item,
#wpadminbar a.ab-item,
#wpadminbar > #wp-toolbar span.ab-label,
#wpadminbar > #wp-toolbar span.noticon {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar .ab-icon,
#wpadminbar .ab-icon:before,
#wpadminbar .ab-item:before,
#wpadminbar .ab-item:after {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar:not(.mobile) .ab-top-menu > li:hover > .ab-item,
#wpadminbar:not(.mobile) .ab-top-menu > li > .ab-item:focus,
#wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus,
#wpadminbar.nojs .ab-top-menu > li.menupop:hover > .ab-item,
#wpadminbar .ab-top-menu > li.menupop.hover > .ab-item {
  color: <?php _abc_color('highlight'); ?>;
  background: <?php _abc_color('secondary'); ?>;
}

#wpadminbar:not(.mobile) > #wp-toolbar li:hover span.ab-label,
#wpadminbar:not(.mobile) > #wp-toolbar li.hover span.ab-label,
#wpadminbar:not(.mobile) > #wp-toolbar a:focus span.ab-label {
  color: <?php _abc_color('highlight'); ?>;
}

#wpadminbar:not(.mobile) li:hover .ab-icon:before,
#wpadminbar:not(.mobile) li:hover .ab-item:before,
#wpadminbar:not(.mobile) li:hover .ab-item:after,
#wpadminbar:not(.mobile) li:hover #adminbarsearch:before {
  color: <?php _abc_color('highlight'); ?>;
}

/* Admin Bar: submenu */
#wpadminbar .menupop .ab-sub-wrapper {
  background: <?php _abc_color('secondary'); ?>;
}

#wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
#wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
  background: <?php _abc_color('secondary'); ?>;
}

#wpadminbar .ab-submenu .ab-item,
#wpadminbar .quicklinks .menupop ul li a,
#wpadminbar .quicklinks .menupop.hover ul li a,
#wpadminbar.nojs .quicklinks .menupop:hover ul li a {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar .quicklinks li .blavatar,
#wpadminbar .menupop .menupop > .ab-item:before {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar .quicklinks .menupop ul li a:hover,
#wpadminbar .quicklinks .menupop ul li a:focus,
#wpadminbar .quicklinks .menupop ul li a:hover strong,
#wpadminbar .quicklinks .menupop ul li a:focus strong,
#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a,
#wpadminbar .quicklinks .menupop.hover ul li a:hover,
#wpadminbar .quicklinks .menupop.hover ul li a:focus,
#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,
#wpadminbar li:hover .ab-icon:before,
#wpadminbar li:hover .ab-item:before,
#wpadminbar li a:focus .ab-icon:before,
#wpadminbar li .ab-item:focus:before,
#wpadminbar li.hover .ab-icon:before,
#wpadminbar li.hover .ab-item:before,
#wpadminbar li:hover #adminbarsearch:before,
#wpadminbar li #adminbarsearch.adminbar-focused:before {
  color: <?php _abc_color('highlight'); ?>;
}

#wpadminbar .quicklinks li a:hover .blavatar,
#wpadminbar .quicklinks li a:focus .blavatar,
#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a .blavatar,
#wpadminbar .menupop .menupop > .ab-item:hover:before,
#wpadminbar.mobile .quicklinks .ab-icon:before,
#wpadminbar.mobile .quicklinks .ab-item:before {
  color: <?php _abc_color('highlight'); ?>;
}

#wpadminbar.mobile .quicklinks .hover .ab-icon:before,
#wpadminbar.mobile .quicklinks .hover .ab-item:before {
  color: <?php _abc_color('highlight'); ?>;
}

/* Admin Bar: search */
#wpadminbar #adminbarsearch:before {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar > #wp-toolbar > #wp-admin-bar-top-secondary > #wp-admin-bar-search #adminbarsearch input.adminbar-input:focus {
  color: <?php _abc_color('text'); ?>;
  background: <?php _abc_color('secondary'); ?>;
}

#wpadminbar #adminbarsearch .adminbar-input::-webkit-input-placeholder {
  color: <?php _abc_color('text'); ?>;
  opacity: 0.7;
}

#wpadminbar #adminbarsearch .adminbar-input:-moz-placeholder {
  color: <?php _abc_color('text'); ?>;
  opacity: 0.7;
}

#wpadminbar #adminbarsearch .adminbar-input::-moz-placeholder {
  color: <?php _abc_color('text'); ?>;
  opacity: 0.7;
}

#wpadminbar #adminbarsearch .adminbar-input:-ms-input-placeholder {
  color: <?php _abc_color('text'); ?>;
  opacity: 0.7;
}

/* Admin Bar: my account */
#wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img {
  border-color: <?php _abc_color('highlight'); ?>;
  background-color: <?php _abc_color('highlight'); ?>;
}

#wpadminbar #wp-admin-bar-user-info .display-name {
  color: <?php _abc_color('highlight'); ?>;
}

#wpadminbar #wp-admin-bar-user-info a:hover .display-name {
  color: <?php _abc_color('text'); ?>;
}

#wpadminbar #wp-admin-bar-user-info .username {
  color: <?php _abc_color('highlight'); ?>;
}
</style>
