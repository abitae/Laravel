<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
      <!-- Styles -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      <link rel="stylesheet" href="css/tailwind.css" />
      @livewireStyles
      <!-- Scripts -->
      <script src="{{ mix('js/app.js') }}" defer></script>
   </head>
   <body>
      <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
         <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div
                x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker"
                >
                Loading.....
            </div>
            <!-- Sidebar -->
            @livewire('sidebar')
            <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
               @livewire('header')
                <main>
                    <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                    
                    <a
                        href="https://abelarana.com"
                        target="_blank"
                        class="px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
                        >
                        power by @abitae
                    </a>
                    </div>
                    {{ $slot }}
                </main>
               @livewire('footer')
            </div>

         </div>
      </div>
      @stack('modals')
      @livewireScripts
      <script>
         const setup = () => {
           const getTheme = () => {
             if (window.localStorage.getItem('dark')) {
               return JSON.parse(window.localStorage.getItem('dark'))
             }
         
             return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
           }
         
           const setTheme = (value) => {
             window.localStorage.setItem('dark', value)
           }
         
           const getColor = () => {
             if (window.localStorage.getItem('color')) {
               return window.localStorage.getItem('color')
             }
             return 'cyan'
           }
         
           const setColors = (color) => {
             const root = document.documentElement
             root.style.setProperty('--color-primary', `var(--color-${color})`)
             root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
             root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
             root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
             root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
             root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
             root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
             this.selectedColor = color
             window.localStorage.setItem('color', color)
             //
           }
         
           const updateBarChart = (on) => {
             const data = {
               data: randomData(),
               backgroundColor: 'rgb(207, 250, 254)',
             }
             if (on) {
               barChart.data.datasets.push(data)
               barChart.update()
             } else {
               barChart.data.datasets.splice(1)
               barChart.update()
             }
           }
         
           const updateDoughnutChart = (on) => {
             const data = random()
             const color = 'rgb(207, 250, 254)'
             if (on) {
               doughnutChart.data.labels.unshift('Seb')
               doughnutChart.data.datasets[0].data.unshift(data)
               doughnutChart.data.datasets[0].backgroundColor.unshift(color)
               doughnutChart.update()
             } else {
               doughnutChart.data.labels.splice(0, 1)
               doughnutChart.data.datasets[0].data.splice(0, 1)
               doughnutChart.data.datasets[0].backgroundColor.splice(0, 1)
               doughnutChart.update()
             }
           }
         
           const updateLineChart = () => {
             lineChart.data.datasets[0].data.reverse()
             lineChart.update()
           }
         
           return {
             loading: true,
             isDark: getTheme(),
             toggleTheme() {
               this.isDark = !this.isDark
               setTheme(this.isDark)
             },
             setLightTheme() {
               this.isDark = false
               setTheme(this.isDark)
             },
             setDarkTheme() {
               this.isDark = true
               setTheme(this.isDark)
             },
             color: getColor(),
             selectedColor: 'cyan',
             setColors,
             toggleSidbarMenu() {
               this.isSidebarOpen = !this.isSidebarOpen
             },
             isSettingsPanelOpen: false,
             openSettingsPanel() {
               this.isSettingsPanelOpen = true
               this.$nextTick(() => {
                 this.$refs.settingsPanel.focus()
               })
             },
             isNotificationsPanelOpen: false,
             openNotificationsPanel() {
               this.isNotificationsPanelOpen = true
               this.$nextTick(() => {
                 this.$refs.notificationsPanel.focus()
               })
             },
             isSearchPanelOpen: false,
             openSearchPanel() {
               this.isSearchPanelOpen = true
               this.$nextTick(() => {
                 this.$refs.searchInput.focus()
               })
             },
             isMobileSubMenuOpen: false,
             openMobileSubMenu() {
               this.isMobileSubMenuOpen = true
               this.$nextTick(() => {
                 this.$refs.mobileSubMenu.focus()
               })
             },
             isMobileMainMenuOpen: false,
             openMobileMainMenu() {
               this.isMobileMainMenuOpen = true
               this.$nextTick(() => {
                 this.$refs.mobileMainMenu.focus()
               })
             },
             updateBarChart,
             updateDoughnutChart,
             updateLineChart,
           }
         }
      </script>
   </body>
</html>