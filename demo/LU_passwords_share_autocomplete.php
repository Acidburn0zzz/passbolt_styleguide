<!doctype html>
<html class=" js websqldatabase draganddrop cssscrollbar" lang="en">
<head>
    <?php include('includes/meta/LU_meta.php'); ?>
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<style>
		/** The following style will be applied dynamically */
		#passbolt-iframe-password-share {
			height: 5.1em;
		}
		#passbolt-iframe-password-share-autocomplete {
			height: 10em;
		}
		@media all and (max-width: 440px) {
			#passbolt-iframe-password-share-autocomplete {
				height: 17.5em;
			}
		}
	</style>
</head>
<body>
<?php include('includes/dialogs/LU_password_share_autocomplete.php'); ?>
<div id="container" class="page password">
    <div class="mad_event_event_bus"></div>
    <div id="js_app_controller" class="passbolt_controller_app_controller mad_view_view js_component ready">
        <?php include('includes/LU_loadingbar.php'); ?>
        <?php include('includes/LU_notifications.php'); ?>
        <?php include('includes/headers/LU_header_first.php'); ?>
        <div class="header second">
            <?php include('includes/headers/LU_header_second_logo.php'); ?>
            <?php include('includes/headers/LU_header_search_passwords.php'); ?>
            <?php include('includes/headers/LU_header_userbadge.php'); ?>
        </div>
        <div class="header third">
            <?php include('includes/headers/LU_header_third_title_passwords.php'); ?>
            <?php include('includes/headers/LU_header_third_actions_passwords.php'); ?>
        </div>
        <?php include('includes/LU_footer.php'); ?>
        <div id="js_app_panel_main" class="panel main mad_controller_component_tab_controller mad_view_component_tab js_component ready">
            <div class="js_tabs_content tabs-content">
                <div id="js_passbolt_passwordWorkspace_controller" class="passbolt_controller_password_workspace_controller mad_view_view tab-content ready selected">
                    <div class="js_workspace">
                        <div class="panel left">
                            <?php include('includes/nav/LU_nav_shortcuts_passwords.php'); ?>
                            <?php include('includes/nav/LU_nav_tree_passwords.php'); ?>
                        </div>
                        <div class="panel middle">
                            <?php
                            $_GET['breadcrumbs'] = array(
                                'all passwords' => '../demo/LU_passwords.php'
                            );
                            include('includes/LU_breadcrumbs.php'); ?>
                            <?php include('includes/tableviews/LU_tableview_passwords.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/LU_footer.php'); ?>
</body>
</html>