<aside id="sidebar" class="sidebar transition-all duration-500 ease-in-out fixed max-lg:z-[60] lg:shrink-0 lg:relative lg:w-72 h-screen max-lg:[&.show_.sidebar-bg]:opacity-60 dark:max-lg:[&.show_.sidebar-bg]:opacity-60 [&.show_.sidebar-bg]:inset-0 [&.show_.sidebar-content]:translate-x-0">
    <!-- backdrop -->
    <div data-close="#sidebar" class="sidebar-bg fixed z-40 opacity-0 -top-full bg-black"></div>

    <!-- menu -->
    <div id="sidebar-content" class="sidebar-content transition-all duration-300 ease-in-out fixed z-40 max-lg:-translate-x-full max-lg:bg-surface-500 dark:max-lg:bg-surfacedark-500 left-0 top-0 bottom-0 h-screen w-72 overflow-auto scrollbars">
      <!-- logo -->
      <a href="../analytics/analytics-dashboard.html" class="sidebar-logo pt-4 pb-2 pl-6 flex items-center w-full">
        <div class="w-9 h-9 rounded-full border-2 border-primary-600 flex items-center justify-center text-primary-800 font-bold text-lg">
          <span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-200">G</span>
        </div>
        <h4 class="text-2xl font-medium tracking-wide text-gray-900 dark:text-gray-100 compact-hide ml-2">Goodash</h4>
      </a>

      <!-- Standart drawer -->
      <div class="w-full inline-flex flex-col px-3 pb-3">
        <!-- title & menu -->
        <div class="pt-6 pb-2 px-4 compact-hide">
          <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Home</p>
        </div>
        <ul class="sidebar-menu flex flex-col">
          <!-- dashboards -->
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">leaderboard</span>
              <span class="compact-title">Analytics</span>
            </a>
            <ul id="dashboard1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li>
                <a href="../analytics/analytics-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li>
                <a href="../analytics/audience.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Audience
                </a>
              </li>
              <li>
                <a href="../analytics/traffic.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Traffics
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">groups</span>
              <span class="compact-title">CRM</span>
            </a>
            <ul id="dashboard2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../crm/crm-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li><a href="../crm/opportunities.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Opportunities
                </a>
              </li>
              <li><a href="../crm/customers.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Customers
                </a>
              </li>
              <li><a href="../crm/customer-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Customer details
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard3" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">shopping_cart</span>
              <span class="compact-title">Ecommerce</span>
            </a>
            <ul id="dashboard3" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../ecommerce/ecommerce-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li><a href="../ecommerce/product-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Product list
                </a>
              </li>
              <li><a href="../ecommerce/product-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Product detail
                </a>
              </li>
              <li><a href="../ecommerce/add-product.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Add product
                </a>
              </li>
              <li><a href="../ecommerce/customers.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Customers
                </a>
              </li>
              <li><a href="../ecommerce/orders.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Orders
                </a>
              </li>
              <li><a href="../ecommerce/order-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Order detail
                </a>
              </li>
              <li><a href="../ecommerce/shopping-cart.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Shopping cart
                </a>
              </li>
              <li><a href="../ecommerce/checkout.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Checkout
                </a>
              </li>
              <li><a href="../ecommerce/invoice.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Invoice
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard4" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">chart_data</span>
              <span class="compact-title">Sales</span>
            </a>
            <ul id="dashboard4" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../sales/sales-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li><a href="../sales/leaderboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Leaderboard
                </a>
              </li>
              <li><a href="../sales/bestseller.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Bestseller
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard5" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">fact_check</span>
              <span class="compact-title">Projects</span>
            </a>
            <ul id="dashboard5" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../projects/project-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li><a href="../projects/project-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Project list
                </a>
              </li>
              <li><a href="../projects/project-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Project detail
                </a>
              </li>
              <li><a href="../projects/kanban-board.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Kanban board
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard_smart" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">house</span>
              <span class="compact-title">Smarthome</span>
            </a>
            <ul id="dashboard_smart" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../smarthome/smarthome-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dashboard
                </a>
              </li>
              <li><a href="../smarthome/rooms.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Rooms
                </a>
              </li>
              <li><a href="../smarthome/room-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Room detail
                </a>
              </li>
              <li><a href="../smarthome/devices.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Devices control
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- title & menu -->
        <div class="pt-6 pb-2 px-4 compact-hide">
          <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Apps</p>
        </div>
        <ul class="sidebar-menu flex flex-col">
          <!-- Apps -->
          <li class="relative">
            <a href="../apps/chats.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">sms</span>
              <span class="compact-title">Chats</span>
              <span class="compact-hide w-5 h-5 flex items-center justify-center rounded-full text-[11px] leading-none tracking-[.045em] font-medium bg-surface-200 dark:bg-surfacedark-200 ml-auto">12</span>
            </a>
          </li>
          <li class="relative">
            <a href="../apps/calendar.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">calendar_today</span>
              <span class="compact-title">Calendar</span>
            </a>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#apps1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">mail</span>
              <span class="compact-title">Email</span>
            </a>
            <ul id="apps1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../apps/inbox.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Inbox
                </a>
              </li>
              <li><a href="../apps/detail-email.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Detail
                </a>
              </li>
              <li><a href="../apps/new-email.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Compose
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="../apps/widgets.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">widgets</span>
              <span class="compact-title">Widgets</span>
            </a>
          </li>
          <li class="relative">
            <a href="../apps/charts.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">pie_chart</span>
              <span class="compact-title">Charts</span>
            </a>
          </li>
        </ul>

        <!-- title & menu -->
        <div class="pt-6 pb-2 px-4 compact-hide">
          <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Pages</p>
        </div>
        <ul class="sidebar-menu flex flex-col">
          <!-- pages -->
          <li class="relative">
            <a href="../index.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">rocket_launch</span>
              <span class="compact-title">Landing page</span>
            </a>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#pages3" class="active flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">description</span>
              <span class="compact-title">Pages</span>
            </a>
            <ul id="pages3" data-type="collapsed" class="active sidebar-submenu [&.active]:block hidden">
              <li><a href="starter.html" class="active flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Starter page
                </a>
              </li>
              <li><a href="maintenance.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Mainternance
                </a>
              </li>
              <li><a href="blog-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Blog list
                </a>
              </li>
              <li><a href="blog-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Blog detail
                </a>
              </li>
              <li><a href="gallery.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Gallery
                </a>
              </li>
              <li><a href="services.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Services
                </a>
              </li>
              <li><a href="timeline.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Timeline
                </a>
              </li>
              <li><a href="faq.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Faq
                </a>
              </li>
              <li><a href="pricing.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Pricing
                </a>
              </li>
              <li><a href="contact.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Contact Us
                </a>
              </li>
              <li><a href="setting.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Settings
                </a>
              </li>
              <li><a href="error-404.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Error 404
                </a>
              </li>
              <li><a href="tos.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Term of Service
                </a>
              </li>
              <li><a href="privacy.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Privacy policy
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#pages1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">person</span>
              <span class="compact-title">Users</span>
            </a>
            <ul id="pages1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
               <li><a href="../user/feed.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Feed
                </a>
              </li>
              <li><a href="../user/profile.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Profile
                </a>
              </li>
              <li><a href="../user/edit-profile.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Edit Profile
                </a>
              </li>
              <li><a href="../user/notification.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Notification
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#pages2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">key</span>
              <span class="compact-title">Authentication</span>
            </a>
            <ul id="pages2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../auth/register.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Register
                </a>
              </li>
              <li><a href="../auth/login.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Login
                </a>
              </li>
              <li><a href="../auth/forgot-password.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Forgot password
                </a>
              </li>
              <li><a href="../auth/reset-password.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Reset password
                </a>
              </li>
              <li><a href="../auth/select-otp.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Select OTP
                </a>
              </li>
              <li><a href="../auth/input-otp.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Input OTP
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- title & menu -->
        <div class="pt-6 pb-2 px-4 compact-hide">
          <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">UI kit</p>
        </div>
        <ul class="sidebar-menu flex flex-col">
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#kit1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">layers</span>
              <span class="compact-title">Components</span>
            </a>
            <ul id="kit1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li>
                <a href="../components/accordion.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Accordion
                </a>
              </li>
              <li>
                <a href="../components/alerts.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Alerts
                </a>
              </li>
              <li>
                <a href="../components/avatar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Avatar
                </a>
              </li>
              <li>
                <a href="../components/breadcrumb.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Breadcrumb
                </a>
              </li>
              <li>
                <a href="../components/badges.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Badges
                </a>
              </li>
              <li>
                <a href="../components/bottom-app-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Bottom app bar
                </a>
              </li>
              <li>
                <a href="../components/bottom-sheets.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Bottom sheets
                </a>
              </li>
              <li>
                <a href="../components/buttons.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Buttons
                </a>
              </li>
              <li>
                <a href="../components/cards.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Cards
                </a>
              </li>
              <li>
                <a href="../components/carousel.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Carousel
                </a>
              </li>
              <li>
                <a href="../components/chips.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Chips
                </a>
              </li>
              <li>
                <a href="../components/dialogs.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dialogs
                </a>
              </li>
              <li>
                <a href="../components/divider.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Divider
                </a>
              </li>
              <li>
                <a href="../components/dropdown.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Dropdown
                </a>
              </li>
              <li>
                <a href="../components/elevation.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Elevation
                </a>
              </li>
              <li>
                <a href="../components/grids.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Grids
                </a>
              </li>
              <li>
                <a href="../components/lists.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Lists
                </a>
              </li>
              <li>
                <a href="../components/navigation-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Navigation bar
                </a>
              </li>
              <li>
                <a href="../components/navigation-drawer.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Navigation drawer
                </a>
              </li>
              <li>
                <a href="../components/navigation-rail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Navigation rail
                </a>
              </li>
              <li>
                <a href="../components/pagination.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Pagination
                </a>
              </li>
              <li>
                <a href="../components/progress-indicators.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Progress indicators
                </a>
              </li>
              <li>
                <a href="../components/rating.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Rating
                </a>
              </li>
              <li>
                <a href="../components/side-sheets.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Side sheets
                </a>
              </li>
              <li>
                <a href="../components/snackbar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Snackbar
                </a>
              </li>
              <li>
                <a href="../components/shape.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Shape
                </a>
              </li>
              <li>
                <a href="../components/stepper.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Stepper
                </a>
              </li>
              <li>
                <a href="../components/tooltips.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Tooltips
                </a>
              </li>
              <li>
                <a href="../components/tabs.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Tabs
                </a>
              </li>
              <li>
                <a href="../components/top-app-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Top app bar
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#kit2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">list_alt</span>
              <span class="compact-title">Forms</span>
            </a>
            <ul id="kit2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../forms/input.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Input &amp; Select
                </a>
              </li>
              <li><a href="../forms/checkbox.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Checkbox &amp; Radio
                </a>
              </li>
              <li><a href="../forms/switch.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Switch
                </a>
              </li>
              <li><a href="../forms/range.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Range slider
                </a>
              </li>
              <li><a href="../forms/date-picker.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Date picker
                </a>
              </li>
              <li><a href="../forms/advance.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Advance
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#kit3" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">article</span>
              <span class="compact-title">Contents</span>
            </a>
            <ul id="kit3" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../docs/colors.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Colors
                </a>
              </li>
              <li><a href="../docs/icons.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Icons
                </a>
              </li>
              <li><a href="../docs/tables.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Tables
                </a>
              </li>
              <li><a href="../docs/typography.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Typography
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="javascript:void(0)" data-type="collapse" data-target="#kit4" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">space_dashboard</span>
              <span class="compact-title">Layouts</span>
            </a>
            <ul id="kit4" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
              <li><a href="../layouts/default.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Default
                </a>
              </li>
              <li><a href="../layouts/compact.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Compact
                </a>
              </li>
              <li><a href="../layouts/compact-text.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Compact text
                </a>
              </li>
              <li><a href="../layouts/classic.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                  Classic
                </a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a href="../docs/plugins.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">extension</span>
              <span class="compact-title">Plugins</span>
            </a>
          </li>
        </ul>

        <!-- title & menu -->
        <div class="pt-6 pb-2 px-4 compact-hide">
          <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Info</p>
        </div>
        <ul class="sidebar-menu flex flex-col">
          <li class="relative">
            <a href="../docs/index.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">quick_reference_all</span>
              <span class="compact-title">Docs</span>
            </a>
          </li>
          <li class="relative">
            <a href="../docs/changelog.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">source_notes</span>
              <span class="compact-title">Changelogs</span>
            </a>
          </li>
          <li class="relative">
            <a href="../docs/support.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
              <span class="material-symbols-outlined">help_center</span>
              <span class="compact-title">Support</span>
            </a>
          </li>
        </ul>

        <div class="w-full flex flex-col gap-2 mt-12">
          <!-- title & content -->
          <div class="pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Statistics</p>
          </div>
          <!-- content -->
          <div class="flex flex-col gap-4 compact-hide mb-6">
            <div class="w-full flex flex-col gap-2 px-4">
              <div class="flex flex-row justify-between">
                <span class="text-title-sm">Complete</span><span class="text-title-sm">89%</span>
              </div>
              <!-- linear progress -->
              <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="w-full flex flex-col gap-2 px-4">
              <div class="flex flex-row justify-between">
                <span class="text-title-sm">On Progress</span><span class="text-title-sm">76%</span>
              </div>
              <!-- linear progress -->
              <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                <div class="flex bg-yellow-600 dark:bg-yellow-200" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="w-full flex flex-col gap-2 px-4">
              <div class="flex flex-row justify-between">
                <span class="text-title-sm">Cancelled</span><span class="text-title-sm">17%</span>
              </div>
              <!-- linear progress -->
              <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                <div class="flex bg-error-600 dark:bg-error-200" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <!-- action -->
          <div class="px-4 flex justify-center mb-12">
            <a href="../index.html" target="_blank" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-label-lg bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
              <span class="material-symbols-outlined">shopping_cart</span><span class="ml-1 compact-hide">Upgrade Now</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </aside>
