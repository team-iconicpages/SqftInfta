<div id="sidebar" class="bg-gradient-to-r from-purple-700 to-pink-700 text-white w-72 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out md:sticky md:top-0 md:h-screen">
    <div class="flex justify-between items-center px-4">
        <a href="#" class="text-white flex items-center space-x-2">
            <img src="./assets/Image/sqftinfra_logo.png" class="w-44" alt="">
        </a>
        <button id="closeBtn" class="text-gray-500 focus:outline-none md:hidden">
            <svg class="h-6 w-6 text-white border rounded-lg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <nav>
        <a href="../Admin/Dashboard.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer mt-1" viewBox="0 0 16 16">
                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0" />
            </svg>
            <span class="ml-2 text-xl">Dashboard</span>
        </a>
        <div class="relative">
            <button id="dropdownBtn" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 w-full text-left flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-funnel-fill mt-1" viewBox="0 0 16 16">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z" />
                </svg>
                <span class="ml-2 text-xl">All Enquires</span>
                <svg class="w-4 h-4 mt-2 inline-block ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="dropdownMenu" class="absolute left-0 hidden bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded shadow-md mt-2 z-10 w-full">
                <a href="../Admin/Queries_&_Leads.php" class="block py-2.5 px-4 transition duration-200 hover:bg-gradient-to-r from-purple-400 to-pink-400">Queries & Leads</a>
                <a href="../Admin/Referral_Lead.php" class="block py-2.5 px-4 transition duration-200 hover:bg-gradient-to-r from-purple-400 to-pink-400">Referral Leads</a>
            </div>
        </div>

        <!-- <a href="../Admin/Blog_Mangement.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                     
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-fill mt-1" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
                      </svg>
                    <span class="ml-2 text-xl">Blog Mangement</span>
                </a>
                <a href="../Admin/Projects_Mangement.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill mt-1" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                    </svg>
                    <span class="ml-2 text-xl">Projects Mangement</span>
                </a>

                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-badge-fill mt-1" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                    </svg>
                        <span class="ml-2 text-xl">Channel Partner</span>
                </a>
                 <a href="../Admin/Team_Mangement.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-heart mt-1" viewBox="0 0 16 16">
                    <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                    </svg>
                        <span class="ml-2 text-xl">Team Management</span>
                </a>
                <a href="../Admin/Job_Listing.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                   
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-briefcase-fill mt-1" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                        <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                        </svg>
                    <span class="ml-2 text-xl">Job Listing</span>
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-fill mt-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224zM4.352 3.356a4 4 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5s-.226.496-.498.542c-.95.162-1.749.78-2.173 1.617a.6.6 0 0 1-.52.341c-.346 0-.599-.329-.457-.644"/>
                        </svg>
                    <span class="ml-2 text-xl">Event Management</span>
                </a> -->
        <a href="../Admin/FAQ.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots-fill mt-1" viewBox="0 0 16 16">
                <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
            </svg>
            <span class="ml-2 text-xl">FAQ</span>
        </a>
        <!-- <a href="../Admin/Premium.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gift-fill mt-1" viewBox="0 0 16 16">
                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z"/>
                      </svg>
                    <span class="ml-2 text-xl">Premium</span>
                </a> -->


        <!-- <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r from-purple-800 to-pink-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-square mt-1" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                      </svg>
                    <span class="ml-2 text-xl">Profile</span>
                </a> -->
    </nav>
</div>