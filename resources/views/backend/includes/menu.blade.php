@if(auth()->user()->type == 'admin')
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الحضانة</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('requested_prices.index') }}" data-i18n="eCommerce">المصروفات الدراسية</a>
                    </li>
                    <li><a class="menu-item " href="{{ route('classes.index') }}" data-i18n="eCommerce">الفصول</a>
                    </li>
                     <li><a class="menu-item " href="{{ route('students.index') }}" data-i18n="eCommerce">جميع الطلاب</a>
                     </li>
                     <li><a class="menu-item" href="{{ route('students.create') }}" data-i18n="eCommerce">إضافة طالب</a>
                     </li>
                     <li><a class="menu-item" href="{{ route('invoices.create') }}" data-i18n="Analytics">تسجيل فاتورة جديدة</a>
                     </li>
                     <li><a class="menu-item" href="{{ route('invoices.index') }}" data-i18n="Analytics">فواتير الطلاب</a>
                     </li>
                    <li><a class="menu-item" href="{{ route('nathriaat.index') }}" data-i18n="eCommerce">فواتير النثريات</a>
                    </li>
                    <li class="nav-item"><a href="#"><span class="menu-title" data-i18n="eCommerce">فواتير المبيعات</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('invoicesale.create') }}" data-i18n="eCommerce">اصدار فاتورة</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('bookinvoices.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#"><span class="menu-title" data-i18n="eCommerce">المنسحبين</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('students.studentwithdrawal') }}" data-i18n="eCommerce">جميع المنسحبين</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('withdrawal.index') }}" data-i18n="Analytics">فواتير المنسحبين</a>
                            </li>
                        </ul>
                    </li>


                     <li><a class="menu-item" href="{{ route('safehadana.index') }}" data-i18n="Analytics">الخزنة</a>
                     </li>

                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">تحفيظ القران</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('quranstudents.index') }}" data-i18n="eCommerce">جميع الطلاب</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('quranstudents.create') }}" data-i18n="eCommerce">إضافة طالب</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('quraninvoices.create') }}" data-i18n="Analytics">تسجيل فاتورة جديدة</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('quraninvoices.index') }}" data-i18n="Analytics">فواتير الطلاب</a>
                    </li>
                    <li class="nav-item"><a href="#"><span class="menu-title" data-i18n="eCommerce">فواتير الكتب</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('quraninvoicesale.create') }}" data-i18n="eCommerce">اصدار فاتورة</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('quraninvoicesale.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="{{ route('safequran.index') }}" data-i18n="Analytics">الخزنة</a>
                    </li>

                </ul>
            </li>
            <li class="navigation-header"><span>Invoices</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i></li>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Analytics">فواتير المبيعات للعملاء</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('customerinvoice.create') }}" data-i18n="eCommerce">اصدار فاتورة مبيعات</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('customerinvoice.index') }}" data-i18n="eCommerce"> جميع فواتير المبيعات</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Analytics">فواتير المشتريات</span></a>
                <ul class="menu-content">
                   <li><a class="menu-item " href="{{ route('supplierinvoices.create') }}" data-i18n="eCommerce">فاتورة شراء</a>
                   </li>
                   <li><a class="menu-item" href="{{ route('supplierinvoices.index') }}" data-i18n="eCommerce"> جميع الفواتير</a>
                   </li>

                </ul>
             </li>



            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="eCommerce">فواتير التبرعات</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('donationinvoicepurchases.index') }}" data-i18n="eCommerce">فواتير المتبرعين</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('donationsinvoices.create') }}" data-i18n="eCommerce">اصدار فاتورة</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('donationsinvoices.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الكانتين</span></a>
               <ul class="menu-content">
                  <li><a class="menu-item " href="{{ route('shopinvoices.create') }}" data-i18n="eCommerce">فاتورة بيع</a>
                  </li>
                  <li><a class="menu-item" href="{{ route('shopinvoices.index') }}" data-i18n="eCommerce"> جميع الفواتير</a>
                  </li>
                  <li><a class="menu-item" href="{{ route('shopinventory.index') }}" data-i18n="eCommerce"> مخزن الكانتين</a>
                  </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">اشتراكات الباص</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('bussubscription.create') }}" data-i18n="eCommerce"> اصدار فاتورة</a>
                    </li>
                    <li> <a class="menu-item" href="{{ route('bussubscription.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header"><span>Invoices</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i></li>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">السائقين</span></a>
                <ul class="menu-content">
                   <li><a class="menu-item" href="{{ route('locations.create') }}" data-i18n="eCommerce">اضافه خط جديد</a>
                   </li>
                   <li><a class="menu-item " href="{{ route('drivers.index') }}" data-i18n="eCommerce">جميع السائقين</a>
                   </li>

                   <li><a class="menu-item" href="{{ route('driverinvoices.create') }}" data-i18n="Analytics">تسجيل فاتورة جديدة</a>
                   </li>
                   <li><a class="menu-item" href="{{ route('driverinvoices.index') }}" data-i18n="Analytics">فواتير السائقين</a>
                   </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الموظفين</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('employeespecializations.index') }}" data-i18n="eCommerce">التخصصات</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('employees.index') }}" data-i18n="Analytics">الموظفين</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('employeeinvoices.create') }}" data-i18n="Analytics">صرف الرواتب </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الموردين</span></a>
                <ul class="menu-content">
                   <li><a class="menu-item " href="{{ route('suppliertype.index') }}" data-i18n="eCommerce"> انواع المواردين</a>
                   </li>
                   <li><a class="menu-item" href="{{ route('suppliers.index') }}" data-i18n="Analytics">المواردين</a>
                   </li>
                   <li><a class="menu-item" href="{{ route('supplierinvoices.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                   </li>
                </ul>
            </li>
            <li class="navigation-header"><span>Invoices</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i></li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الكتب</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('bookinventory.index') }}" data-i18n="eCommerce">مخزن الكتب</a>
                    </li>

                 </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الملابس</span></a>
                <ul class="menu-content">
                   <li><a class="menu-item " href="{{ route('clothesinventory.index') }}" data-i18n="eCommerce">مخزن الملابس</a>
                   </li>

                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">التبرعات</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('donations.index') }}" data-i18n="eCommerce">الحاله</a>
                    </li>
                    <li><a class="menu-item " href="{{ route('reasons.index') }}" data-i18n="eCommerce">الاسباب</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الخزنة الرئيسية</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item " href="{{ route('safe.index') }}" data-i18n="eCommerce">الخزنة الرئيسية</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('safebook.index') }}" data-i18n="Analytics">الخزنة</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('safeclothes.index') }}" data-i18n="Analytics">خزنة الملابس</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('safedonations.index') }}" data-i18n="Analytics">خزنة التبرعات</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
@elseif(auth()->user()->type == 'manager')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                        <li><a class="nav-item " href="{{ route('classes.index') }}" data-i18n="eCommerce">الفصول</a>
                        </li>
                        <li><a class="nav-item " href="{{ route('students.index') }}" data-i18n="eCommerce">جميع الطلاب</a>
                        </li>
                        <li><a class="nav-item" href="{{ route('students.create') }}" data-i18n="eCommerce">إضافة طالب</a>
                        </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

@elseif(auth()->user()->type == 'user')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li><a class="nav-item" href="{{ route('donationinvoicepurchases.index') }}" data-i18n="eCommerce">فواتير المتبرعين</a>
                </li>
                <li><a class="nav-item" href="{{ route('donationsinvoices.create') }}" data-i18n="eCommerce">اصدار فاتورة</a>
                </li>
                <li><a class="nav-item" href="{{ route('donationsinvoices.index') }}" data-i18n="Analytics">جميع الفواتير</a>
                </li>
                <li><a class="menu-item " href="{{ route('donations.index') }}" data-i18n="eCommerce">الحاله</a>
                </li>
                <li><a class="menu-item " href="{{ route('reasons.index') }}" data-i18n="eCommerce">الاسباب</a>
                </li>
                <li><a class="menu-item" href="{{ route('safedonations.index') }}" data-i18n="Analytics">خزنة التبرعات</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

@endif
@if(auth()->user()->type == 'owner')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <h2 class="text-center mt-1 primary">التقارير</h2>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li><a class="nav-item text-bold-700" href="{{ route('ownerdetails.index') }}" data-i18n="eCommerce">تقارير مفصلة </a>
                </li>
            </ul>
        </div>
    </div>

@endif



