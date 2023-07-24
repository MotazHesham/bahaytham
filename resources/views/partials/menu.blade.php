<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('project_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.projects.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/projects") || request()->is("admin/projects/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.project.title') }}
                </a>
            </li>
        @endcan
        @can('service_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.service.title') }}
                </a>
            </li>
        @endcan
        @can('client_managment_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/clients*") ? "c-show" : "" }} {{ request()->is("admin/request-services*") ? "c-show" : "" }} {{ request()->is("admin/consultants*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-align-left c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.clientManagment.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('client_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.clients.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.client.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('request_service_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.request-services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/request-services") || request()->is("admin/request-services/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-servicestack c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.requestService.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('consultant_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.consultants.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/consultants") || request()->is("admin/consultants/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-contao c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.consultant.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_alert_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userAlert.title') }}
                </a>
            </li>
        @endcan
        @can('faq_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/faq-categories*") ? "c-show" : "" }} {{ request()->is("admin/faq-questions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.faqManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('faq_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_question_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-questions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqQuestion.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('general_setting_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/aboutus*") ? "c-show" : "" }} {{ request()->is("admin/sliders*") ? "c-show" : "" }} {{ request()->is("admin/partners*") ? "c-show" : "" }} {{ request()->is("admin/said-about-uss*") ? "c-show" : "" }} {{ request()->is("admin/contacts*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cog c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.generalSetting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('aboutu_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.aboutus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/aboutus") || request()->is("admin/aboutus/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.aboutu.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('slider_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-images c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.slider.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('partner_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.partners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-heart c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partner.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('said_about_us_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.said-about-uss.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/said-about-uss") || request()->is("admin/said-about-uss/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.saidAboutUs.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('contact_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-comments c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contact.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.systemCalendar") }}" class="c-sidebar-nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "c-active" : "" }}">
                <i class="c-sidebar-nav-icon fa-fw fas fa-calendar">

                </i>
                {{ trans('global.systemCalendar') }}
            </a>
        </li>
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>