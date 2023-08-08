<div
    id="kt_app_sidebar"
    class="app-sidebar"
    data-kt-drawer="true"
    data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="auto"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
    style=""
>
    <div class="app-sidebar-primary">
        <div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 pb-2" id="kt_app_sidebar_logo">
           <a href="home">
                <img alt="Logo" src="{{ url('assets/media/logos/logo.png') }}" class="h-40px" />
              </a>
        </div>

        <div
            class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-ms my-5"
            id="kt_aside_menu_wrapper"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu"
            data-kt-scroll-offset="5px"
            style="height: 45px;"
        >
            <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
                <div class="menu-item here py-2">
                    <span class="menu-link menu-center">
                        <span class="menu-icon me-0"><i class="bi bi-house-door fs-1"></i></span>
                    </span>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <span class="menu-link menu-center">
                      <span class="menu-icon me-0"><i class="bi bi-folder2-open fs-1"></i></span>
                    </span>

                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                      <div class="menu-item">
                        <div class="menu-content"><span class="menu-section fs-5 ps-1 py-1">Pages</span></div>
                      </div>

                      <div class="menu-item">
                        <a class="menu-link" href="user-profile.html">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">My Profile</span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="user-account.html">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">My Account</span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="user-tasks.html">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">My Tasks</span>
                        </a>
                      </div>

                      <div class="menu-item">
                        <a class="menu-link" href="user-teams.html">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">My Team</span>
                        </a>
                      </div>

                      <div class="menu-item">
                        <a class="menu-link" href="user-feeds.html">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Social Account</span>
                        </a>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion ml-1">
                        <span class="menu-link">
                          <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Authentication</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="layout/sign-in.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Sign-up</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="layout/sign-up.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Sign-up</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="layout/welcome.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Welcome Message</span>
                            </a>
                          </div>

       
                          <div class="menu-item">
                            <a class="menu-link" href="layout/coming-soon.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Coming Soon</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="layout/error-500.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Error 500</span>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <span class="menu-link menu-center">
                      <span class="menu-icon me-0"><i class="bi bi-menu-down fs-1"></i></span>
                    </span>

                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                      <div class="menu-item">
                        <div class="menu-content"><span class="menu-section fs-5 ps-1 py-1">Menu</span></div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Projects</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="projects/project.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Project</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="projects/targets.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Targets</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="projects/budget.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Budget</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="projects/activity.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Activity</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="projects/settings.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Settings</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">eCommerce</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Catalog</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Products</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Categories</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Add Product</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Edit Product</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Add Category</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="#">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Edit Category</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Settings</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><span class="bi bi-command"></span></span><span class="menu-title">Reports</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Products Viewed</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Sales</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Returns</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Customer Orders</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Shipping</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Contacts</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Getting Started</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Add Contact</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Edit Contact</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Contact</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Support Center</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Overview</span>
                            </a>
                          </div>

                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Tickets</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/support-center/tickets/list.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Tickets List</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/support-center/tickets/view.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Ticket</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Tutorials</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/support-center/tutorials/list.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Tutorials List</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/support-center/tutorials/post.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Tutorial Post</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/support-center/faq.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">FAQ</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/support-center/licenses.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Licenses</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/support-center/contact.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Contact Us</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">User Management</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Users</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                <a class="menu-link" href="user-list.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Users List</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="user-view.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View User</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Roles</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/user-management/roles/list.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Roles List</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/user-management/roles/view.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Role</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/user-management/permissions.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Permissions</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Customers</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/customers/getting-started.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Getting Started</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/customers/list.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Customer Listing</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/customers/view.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Customer Details</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Subscription</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/subscriptions/getting-started.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Getting Started</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/subscriptions/list.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Subscription List</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/subscriptions/add.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Add Subscription</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/subscriptions/view.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Subscription</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Invoice Manager</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View Invoices</span><span class="menu-arrow"></span>
                            </span>

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/invoices/view/invoice-1.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Invoice 1</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/invoices/view/invoice-2.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Invoice 2</span>
                                </a>
                              </div>

                              <div class="menu-item">
                                <a class="menu-link" href="../demo50/apps/invoices/view/invoice-3.html">
                                  <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Invoice 3</span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="../demo50/apps/invoices/create.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Create Invoice</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">File Manager</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="folders.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Folders</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="files.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Files</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="blank.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Blank Directory</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="settings.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Settings</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Inbox</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="listing.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Messages</span>
                              <span class="menu-badge"><span class="badge badge-success">3</span></span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="compose.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Compose</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="reply.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">View & Reply</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                          <span class="menu-icon"><i class="bi bi-command"></i></span><span class="menu-title">Chat</span><span class="menu-arrow"></span>
                        </span>

                        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                            <a class="menu-link" href="private.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Private Chat</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="group.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Group Chat</span>
                            </a>
                          </div>

                          <div class="menu-item">
                            <a class="menu-link" href="drawer.html">
                              <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Drawer Chat</span>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="menu-item">
                        <a class="menu-link" href="calendar.html">
                          <span class="menu-icon"><i class="bi bi-calendar"></i></span><span class="menu-title">Calendar</span>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <span class="menu-link menu-center">
                      <span class="menu-icon me-0"><i class="bi bi-bar-chart-line fs-1"></i></span>
                    </span>

                    <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                      <div class="menu-item">
                        <div class="menu-content"><span class="menu-section fs-5 ps-1 py-1">Reports</span></div>
                      </div>

                      <div class="menu-item">
                        <a class="menu-link" href="#">
                          <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Master Report</span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="#">
                          <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Task Report</span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="#">
                          <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Project Report</span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="#">
                          <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">User Report</span>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="menu-item py-2">
                    <a class="menu-link" href="help.html">
                      <span class="menu-link menu-center">
                        <span class="menu-icon me-0"><i class="bi bi-shield-fill-check fs-1"></i></span>
                      </span>
                    </a>
                  </div>
                  <div class="menu-item py-2">
                    <a class="menu-link" href="setting.html">
                      <span class="menu-link menu-center">
                        <span class="menu-icon me-0"><i class="bi bi-gear fs-1"></i></span>
                      </span>
                    </a>
                  </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
            <!-- <div class="cursor-pointer symbol symbol-40px mb-9" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent" data-kt-menu-placement="right-end">
                <img src="/metronic8/demo50/assets/media/avatars/300-2.jpg" alt="user" />
            </div> -->


            <div class="app-navbar-item">
                <a href="authentication/layouts/corporate/sign-in.html" class="">
                    <i class="bi bi-exit-right fs-1"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="app-sidebar-secondary">
        <div class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 py-4 py-lg-6" id="kt_app_sidebar_secondary_menu" data-kt-menu="true">
            <div
                id="kt_app_sidebar_secondary_menu_wrapper"
                class="hover-scroll-y mx-3 px-4"
                data-kt-scroll="true"
                data-kt-scroll-activate="{default: true, lg: true}"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_app_sidebar_secondary_menu"
                data-kt-scroll-offset="20px"
                style="height: 214px;"
            >
                <!-- <div class="menu-item">
                    <div class="menu-content"><span class="menu-section fs-5  ps-1 py-1">Dashboard</span></div>
                </div> -->
                <div class="menu-item">
                    <a class="menu-link" href="index.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Task</span><span class="badge badge-light ms-auto">10</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="index.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Activites</span>
                    </a>
                </div>
                <div class="separator separator-dashed my-4"></div>
                <div class="menu-item">
                    <div class="menu-content"><span class="menu-section fs-5  ps-1 py-1">Main</span></div>
                </div> 
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/ecommerce.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/projects.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Schedule</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link active" href="dashboards/online-courses.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Note</span>
                    </a>
                </div>
                
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/bidding.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Projects</span>
                    </a>
                </div>
              
                <br/>
               
                <div class="menu-item">
                    <div class="menu-content"><span class="menu-section fs-5  ps-1 py-1">Records</span></div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/crypto.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Teams</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/school.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Clients</span>
                    </a>
                </div>
                <br/>
                  
                <div class="menu-item">
                    <a class="menu-link" href="dashboards/podcast.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Settings</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="landing.html">
                        <span class="menu-bullet"><span class="bi bi-command"></span></span><span class="menu-title">Support</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <button
        id="kt_app_sidebar_secondary_toggle"
        class="app-sidebar-secondary-toggle btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-color-primary position-absolute translate-middle z-index-1 start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-4"
        data-kt-toggle="true"
        data-kt-toggle-state="active"
        data-kt-toggle-target="body"
        data-kt-toggle-name="app-sidebar-secondary-collapse"
    >
        <i class="bi bi-arrow-left fs-2 rotate-180"></i>
    </button>
</div>
