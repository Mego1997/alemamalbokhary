<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;



Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/events', function () {
    return view('frontend.events');
});
Route::get('/single_event', function () {
    return view('frontend.single_event');
});
Route::get('/trips', function () {
    return view('frontend.trips');
});
Route::get('/photos', function () {
    return view('frontend.photos');
});
Route::get('/kg', function () {
    return view('frontend.kg');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/blogs', function () {
    return view('frontend.blogs');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/kg-serv', function () {
    return view('frontend.kg-serv');
});
Route::get('/helps', function () {
    return view('frontend.helps');
});
Route::get('/social', function () {
    return view('frontend.social');
});
Route::get('/edu', function () {
    return view('frontend.edu');
});
Route::get('/health', function () {
    return view('frontend.health');
});
Route::get('/quran', function () {
    return view('frontend.quran');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:admin'])->group(function () {


    Route::get('/login', function () {
        return view('backend.home');
    });

    Route::get('/migrate', function(){
        Artisan::call('migrate');
        dd('migrated!');
    });

    Route::get('reboot',function(){
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('key:generate');

    });

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');



// Dashboard invoices_sale
    Route::get('/dashboard/quraninvoicesale', [App\Http\Controllers\QuranInvoiceSaleController::class, 'index'])->name('quraninvoicesale.index');
    Route::get('/dashboard/quraninvoicesale/create', [App\Http\Controllers\QuranInvoiceSaleController::class, 'create'])->name('quraninvoicesale.create');
    Route::post('/dashboard/quraninvoicesale/store', [App\Http\Controllers\QuranInvoiceSaleController::class, 'store'])->name('quraninvoicesale.store');
    Route::get('/dashboard/quraninvoicesale/edit/{id}', [App\Http\Controllers\QuranInvoiceSaleController::class, 'edit'])->name('quraninvoicesale.edit');
    Route::get('/dashboard/quraninvoicesale/update/{id}', [App\Http\Controllers\QuranInvoiceSaleController::class, 'update'])->name('quraninvoicesale.update');
    Route::get('/dashboard/quraninvoicesale/show/{id}', [App\Http\Controllers\QuranInvoiceSaleController::class, 'show'])->name('quraninvoicesale.show');
    Route::get('/dashboard/quraninvoicesale/destroy/{id}', [App\Http\Controllers\QuranInvoiceSaleController::class, 'destroy'])->name('quraninvoicesale.destroy');
    Route::post('/get-book',[App\Http\Controllers\QuranInvoiceSaleController::class, 'getBook']);



    // Dashboard nathriaat
    Route::get('/dashboard/nathriaat', [App\Http\Controllers\NathriaatController::class, 'index'])->name('nathriaat.index');
    Route::get('/dashboard/nathriaat/create', [App\Http\Controllers\NathriaatController::class, 'create'])->name('nathriaat.create');
    Route::post('/dashboard/nathriaat/store', [App\Http\Controllers\NathriaatController::class, 'store'])->name('nathriaat.store');
    Route::get('/dashboard/nathriaat/show/{id}', [App\Http\Controllers\NathriaatController::class, 'show'])->name('nathriaat.show');
    Route::delete('/dashboard/nathriaat/destroy/{id}', [App\Http\Controllers\NathriaatController::class, 'destroy'])->name('nathriaat.destroy');

    // Dashboard students
    Route::get('/dashboard/students', [App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
    Route::get('/dashboard/students/create', [App\Http\Controllers\StudentsController::class, 'create'])->name('students.create');
    Route::post('/dashboard/students/store', [App\Http\Controllers\StudentsController::class, 'store'])->name('students.store');
    Route::get('/dashboard/students/show/{id}', [App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');
    Route::get('/dashboard/students/edit/{id}', [App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/dashboard/students/update/{id}', [App\Http\Controllers\StudentsController::class, 'update'])->name('students.update');
    Route::delete('/dashboard/students/destroy/{id}', [App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.destroy');

    // studentwithdrawal
    Route::get('/dashboard/studentwithdrawal', [App\Http\Controllers\StudentsController::class, 'studentwithdrawal'])->name('students.studentwithdrawal');
    Route::get('/dashboard/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal.index');
    Route::get('/dashboard/withdrawal/hadana/{id}', [App\Http\Controllers\WithdrawalController::class, 'hadana'])->name('withdrawal.hadana');
    Route::post('/dashboard/withdrawal/store', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('withdrawal.store');
    Route::get('/dashboard/withdrawal/show/{id}', [App\Http\Controllers\WithdrawalController::class, 'show'])->name('withdrawal.show');

    // Dashboard QuranStudents
    Route::get('/dashboard/quranstudents', [App\Http\Controllers\QuranStudentController::class, 'index'])->name('quranstudents.index');
    Route::get('/dashboard/quranstudents/create', [App\Http\Controllers\QuranStudentController::class, 'create'])->name('quranstudents.create');
    Route::post('/dashboard/quranstudents/store', [App\Http\Controllers\QuranStudentController::class, 'store'])->name('quranstudents.store');
    Route::get('/dashboard/quranstudents/show/{id}', [App\Http\Controllers\QuranStudentController::class, 'show'])->name('quranstudents.show');
    Route::get('/dashboard/quranstudents/edit/{id}', [App\Http\Controllers\QuranStudentController::class, 'edit'])->name('quranstudents.edit');
    Route::put('/dashboard/quranstudents/update/{id}', [App\Http\Controllers\QuranStudentController::class, 'update'])->name('quranstudents.update');
    Route::delete('/dashboard/quranstudents/destroy/{id}', [App\Http\Controllers\QuranStudentController::class, 'destroy'])->name('quranstudents.destroy');
    Route::get('/dashboard/quranstudents/filter/', [App\Http\Controllers\QuranStudentController::class, 'filter'])->name('quranstudents.filter');


    // Dashboard QuranStudents invoices
    Route::get('/dashboard/quraninvoices', [App\Http\Controllers\QuranInvoiceController::class, 'index'])->name('quraninvoices.index');
    Route::get('/dashboard/quraninvoices/create', [App\Http\Controllers\QuranInvoiceController::class, 'create'])->name('quraninvoices.create');
    Route::post('/dashboard/quraninvoices/store', [App\Http\Controllers\QuranInvoiceController::class, 'store'])->name('quraninvoices.store');
    Route::get('/dashboard/quraninvoices/show/{id}', [App\Http\Controllers\QuranInvoiceController::class, 'show'])->name('quraninvoices.show');
    Route::delete('/dashboard/quraninvoices/destroy/{id}', [App\Http\Controllers\QuranInvoiceController::class, 'destroy'])->name('quraninvoices.destroy');

    // Dashboard reasons
    Route::get('/dashboard/reasons', [App\Http\Controllers\ReasonController::class, 'index'])->name('reasons.index');
    Route::get('/dashboard/reasons/create', [App\Http\Controllers\ReasonController::class, 'create'])->name('reasons.create');
    Route::post('/dashboard/reasons/store', [App\Http\Controllers\ReasonController::class, 'store'])->name('reasons.store');
    Route::get('/dashboard/reasons/show/{id}', [App\Http\Controllers\ReasonController::class, 'show'])->name('reasons.show');
    Route::get('/dashboard/reasons/edit/{id}', [App\Http\Controllers\ReasonController::class, 'edit'])->name('reasons.edit');
    Route::put('/dashboard/reasons/update/{id}', [App\Http\Controllers\ReasonController::class, 'update'])->name('reasons.update');
    Route::delete('/dashboard/reasons/destroy/{id}', [App\Http\Controllers\ReasonController::class, 'destroy'])->name('reasons.destroy');

    // Dashboard donations
    Route::get('/dashboard/donations', [App\Http\Controllers\DonationController::class, 'index'])->name('donations.index');
    Route::get('/dashboard/donations/create', [App\Http\Controllers\DonationController::class, 'create'])->name('donations.create');
    Route::post('/dashboard/donations/store', [App\Http\Controllers\DonationController::class, 'store'])->name('donations.store');
    Route::get('/dashboard/donations/show/{id}', [App\Http\Controllers\DonationController::class, 'show'])->name('donations.show');
    Route::get('/dashboard/donations/edit/{id}', [App\Http\Controllers\DonationController::class, 'edit'])->name('donations.edit');
    Route::put('/dashboard/donations/update/{id}', [App\Http\Controllers\DonationController::class, 'update'])->name('donations.update');
    Route::delete('/dashboard/donations/destroy/{id}', [App\Http\Controllers\DonationController::class, 'destroy'])->name('donations.destroy');

    // Dashboard donationsinvoices
    Route::get('/dashboard/donationsinvoices', [App\Http\Controllers\DonationInvoicesController::class, 'index'])->name('donationsinvoices.index');
    Route::get('/dashboard/donationsinvoices/create', [App\Http\Controllers\DonationInvoicesController::class, 'create'])->name('donationsinvoices.create');
    Route::post('/dashboard/donationsinvoices/store', [App\Http\Controllers\DonationInvoicesController::class, 'store'])->name('donationsinvoices.store');
    Route::get('/dashboard/donationsinvoices/show/{id}', [App\Http\Controllers\DonationInvoicesController::class, 'show'])->name('donationsinvoices.show');
    Route::delete('/dashboard/donationsinvoices/destroy/{id}', [App\Http\Controllers\DonationInvoicesController::class, 'destroy'])->name('donationsinvoices.destroy');

    // Dashboard donationsinvoicespurchases
    Route::get('/dashboard/donationinvoicepurchases', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'index'])->name('donationinvoicepurchases.index');
    Route::get('/dashboard/donationinvoicepurchases/create', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'create'])->name('donationinvoicepurchases.create');
    Route::post('/dashboard/donationinvoicepurchases/store', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'store'])->name('donationinvoicepurchases.store');
    Route::get('/dashboard/donationinvoicepurchases/show/{id}', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'show'])->name('donationinvoicepurchases.show');
    Route::delete('/dashboard/donationinvoicepurchases/destroy/{id}', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'destroy'])->name('donationinvoicepurchases.destroy');


// Dashboard drivers
Route::get('/dashboard/drivers', [App\Http\Controllers\DriversController::class, 'index'])->name('drivers.index');
Route::get('/dashboard/drivers/create', [App\Http\Controllers\DriversController::class, 'create'])->name('drivers.create');
Route::post('/dashboard/drivers/store', [App\Http\Controllers\DriversController::class, 'store'])->name('drivers.store');
Route::get('/dashboard/drivers/show/{id}', [App\Http\Controllers\DriversController::class, 'show'])->name('drivers.show');
Route::get('/dashboard/drivers/edit/{id}', [App\Http\Controllers\DriversController::class, 'edit'])->name('drivers.edit');
Route::put('/dashboard/drivers/update/{id}', [App\Http\Controllers\DriversController::class, 'update'])->name('drivers.update');
Route::delete('/dashboard/drivers/destroy/{id}', [App\Http\Controllers\DriversController::class, 'destroy'])->name('drivers.destroy');

// Dashboard drivers invoices
Route::get('/dashboard/driverinvoices', [App\Http\Controllers\InvoiceDriversController::class, 'index'])->name('driverinvoices.index');
Route::get('/dashboard/driverinvoices/create', [App\Http\Controllers\InvoiceDriversController::class, 'create'])->name('driverinvoices.create');
Route::post('/dashboard/driverinvoices/store', [App\Http\Controllers\InvoiceDriversController::class, 'store'])->name('driverinvoices.store');
Route::get('/dashboard/driverinvoices/show/{id}', [App\Http\Controllers\InvoiceDriversController::class, 'show'])->name('driversinvoices.show');
Route::delete('/dashboard/driverinvoices/destroy/{id}', [App\Http\Controllers\InvoiceDriversController::class, 'destroy'])->name('driverinvoices.destroy');
Route::post('/get-pricee',[App\Http\Controllers\DriversController::class, 'getpricee']);
// Dashboard drivers invoices
Route::get('/dashboard/employeeinvoices', [App\Http\Controllers\EmployeeInvoiceController::class, 'index'])->name('employeeinvoices.index');
Route::get('/dashboard/employeeinvoices/create', [App\Http\Controllers\EmployeeInvoiceController::class, 'create'])->name('employeeinvoices.create');
Route::post('/dashboard/employeeinvoices/store', [App\Http\Controllers\EmployeeInvoiceController::class, 'store'])->name('employeeinvoices.store');
Route::get('/dashboard/employeeinvoices/show/{id}', [App\Http\Controllers\EmployeeInvoiceController::class, 'show'])->name('employeeinvoices.show');
Route::delete('/dashboard/employeeinvoices/destroy/{id}', [App\Http\Controllers\EmployeeInvoiceController::class, 'destroy'])->name('employeeinvoices.destroy');
Route::post('/get-salary',[App\Http\Controllers\EmployeeInvoiceController::class, 'getsalary']);


// Dashboard locations
Route::get('/dashboard/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/dashboard/locations/create', [App\Http\Controllers\LocationController::class, 'create'])->name('locations.create');
Route::post('/dashboard/locations/store', [App\Http\Controllers\LocationController::class, 'store'])->name('locations.store');
Route::get('/dashboard/locations/edit/{id}', [App\Http\Controllers\LocationController::class, 'edit'])->name('locations.edit');
Route::put('/dashboard/locations/update/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('locations.update');
Route::delete('/dashboard/locations/destroy/{id}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('locations.destroy');

// Dashboard Hadana invoices
Route::get('/dashboard/invoices', [App\Http\Controllers\HadanaInvoicesController::class, 'index'])->name('invoices.index');
Route::get('/dashboard/invoices/create', [App\Http\Controllers\HadanaInvoicesController::class, 'create'])->name('invoices.create');
Route::post('/dashboard/invoices/store', [App\Http\Controllers\HadanaInvoicesController::class, 'store'])->name('invoices.store');
Route::get('/dashboard/invoices/edit/{id}', [App\Http\Controllers\HadanaInvoicesController::class, 'edit'])->name('invoices.edit');
Route::put('/dashboard/invoices/update/{id}', [App\Http\Controllers\HadanaInvoicesController::class, 'update'])->name('invoices.update');
Route::delete('/dashboard/invoices/destroy/{id}', [App\Http\Controllers\HadanaInvoicesController::class, 'destroy'])->name('invoices.destroy');



// Dashboard Book inventory
Route::get('/dashboard/bookinventory', [App\Http\Controllers\BookInventoryController::class, 'index'])->name('bookinventory.index');
Route::get('/dashboard/bookinventory/create', [App\Http\Controllers\BookInventoryController::class, 'create'])->name('bookinventory.create');
Route::post('/dashboard/bookinventory/store', [App\Http\Controllers\BookInventoryController::class, 'store'])->name('bookinventory.store');
Route::get('/dashboard/bookinventory/edit/{id}', [App\Http\Controllers\BookInventoryController::class, 'edit'])->name('bookinventory.edit');
Route::put('/dashboard/bookinventory/update/{id}', [App\Http\Controllers\BookInventoryController::class, 'update'])->name('bookinventory.update');
Route::delete('/dashboard/bookinventory/destroy/{id}', [App\Http\Controllers\BookInventoryController::class, 'destroy'])->name('bookinventory.destroy');



// Dashboard Supplier Type
Route::get('/dashboard/suppliertype', [App\Http\Controllers\SupplierTypeController::class, 'index'])->name('suppliertype.index');
Route::get('/dashboard/suppliertype/create', [App\Http\Controllers\SupplierTypeController::class, 'create'])->name('suppliertype.create');
Route::post('/dashboard/suppliertype/store', [App\Http\Controllers\SupplierTypeController::class, 'store'])->name('suppliertype.store');
Route::get('/dashboard/suppliertype/edit/{id}', [App\Http\Controllers\SupplierTypeController::class, 'edit'])->name('suppliertype.edit');
Route::put('/dashboard/suppliertype/update/{id}', [App\Http\Controllers\SupplierTypeController::class, 'update'])->name('suppliertype.update');
Route::delete('/dashboard/suppliertype/destroy/{id}', [App\Http\Controllers\SupplierTypeController::class, 'destroy'])->name('suppliertype.destroy');

// Dashboard Suppliers
Route::get('/dashboard/suppliers', [App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/dashboard/suppliers/create', [App\Http\Controllers\SupplierController::class, 'create'])->name('suppliers.create');
Route::post('/dashboard/suppliers/store', [App\Http\Controllers\SupplierController::class, 'store'])->name('suppliers.store');
Route::get('/dashboard/suppliers/edit/{id}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('suppliers.edit');
Route::get('/dashboard/suppliers/show/{id}', [App\Http\Controllers\SupplierController::class, 'show'])->name('suppliers.show');

Route::put('/dashboard/suppliers/update/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('/dashboard/suppliers/destroy/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('suppliers.destroy');
Route::post('/get-supplier-by-type',[App\Http\Controllers\SupplierController::class, 'getSupplier']);



// Dashboard employee_specializations
Route::get('/dashboard/employeespecializations', [App\Http\Controllers\EmployeeSpecializationController::class, 'index'])->name('employeespecializations.index');
Route::get('/dashboard/employeespecializations/create', [App\Http\Controllers\EmployeeSpecializationController::class, 'create'])->name('employeespecializations.create');
Route::post('/dashboard/employeespecializations/store', [App\Http\Controllers\EmployeeSpecializationController::class, 'store'])->name('employeespecializations.store');
Route::get('/dashboard/employeespecializations/edit/{id}', [App\Http\Controllers\EmployeeSpecializationController::class, 'edit'])->name('employeespecializations.edit');
Route::put('/dashboard/employeespecializations/update/{id}', [App\Http\Controllers\EmployeeSpecializationController::class, 'update'])->name('employeespecializations.update');
Route::delete('/dashboard/employeespecializations/destroy/{id}', [App\Http\Controllers\EmployeeSpecializationController::class, 'destroy'])->name('employeespecializations.destroy');
// Dashboard requested_prices
Route::get('/dashboard/requested_prices', [App\Http\Controllers\RequestedPriceController::class, 'index'])->name('requested_prices.index');
Route::get('/dashboard/requested_prices/create', [App\Http\Controllers\RequestedPriceController::class, 'create'])->name('requested_prices.create');
Route::post('/dashboard/requested_prices/store', [App\Http\Controllers\RequestedPriceController::class, 'store'])->name('requested_prices.store');
Route::get('/dashboard/requested_prices/edit/{id}', [App\Http\Controllers\RequestedPriceController::class, 'edit'])->name('requested_prices.edit');
Route::put('/dashboard/requested_prices/update/{id}', [App\Http\Controllers\RequestedPriceController::class, 'update'])->name('requested_prices.update');
Route::delete('/dashboard/requested_prices/destroy/{id}', [App\Http\Controllers\RequestedPriceController::class, 'destroy'])->name('requested_prices.destroy');
// Dashboard classes
Route::get('/dashboard/classes', [App\Http\Controllers\ClassesController::class, 'index'])->name('classes.index');
Route::get('/dashboard/classes/create', [App\Http\Controllers\ClassesController::class, 'create'])->name('classes.create');
Route::post('/dashboard/classes/store', [App\Http\Controllers\ClassesController::class, 'store'])->name('classes.store');
Route::get('/dashboard/classes/edit/{id}', [App\Http\Controllers\ClassesController::class, 'edit'])->name('classes.edit');
Route::put('/dashboard/classes/update/{id}', [App\Http\Controllers\ClassesController::class, 'update'])->name('classes.update');
Route::get('/dashboard/classes/show/{id}', [App\Http\Controllers\ClassesController::class, 'show'])->name('classes.show');
Route::delete('/dashboard/classes/destroy/{id}', [App\Http\Controllers\ClassesController::class, 'destroy'])->name('classes.destroy');
// Dashboard employees
Route::get('/dashboard/employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
Route::get('/dashboard/employees/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
Route::post('/dashboard/employees/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
Route::get('/dashboard/employees/show/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employees.show');
Route::get('/dashboard/employees/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/dashboard/employees/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/dashboard/employees/destroy/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.destroy');


// Dashboard Clothes inventory
Route::get('/dashboard/clothesinventory', [App\Http\Controllers\ClothesInventoryController::class, 'index'])->name('clothesinventory.index');
Route::get('/dashboard/clothesinventory/create', [App\Http\Controllers\ClothesInventoryController::class, 'create'])->name('clothesinventory.create');
Route::post('/dashboard/clothesinventory/store', [App\Http\Controllers\ClothesInventoryController::class, 'store'])->name('clothesinventory.store');
Route::get('/dashboard/clothesinventory/edit/{id}', [App\Http\Controllers\ClothesInventoryController::class, 'edit'])->name('clothesinventory.edit');
Route::put('/dashboard/clothesinventory/update/{id}', [App\Http\Controllers\ClothesInventoryController::class, 'update'])->name('clothesinventory.update');
Route::delete('/dashboard/clothesinventory/destroy/{id}', [App\Http\Controllers\ClothesInventoryController::class, 'destroy'])->name('clothesinventory.destroy');
// Dashboard Shop inventory
Route::get('/dashboard/shopinventory', [App\Http\Controllers\ShopInventoryController::class, 'index'])->name('shopinventory.index');
Route::get('/dashboard/shopinventory/create', [App\Http\Controllers\ShopInventoryController::class, 'create'])->name('shopinventory.create');
Route::post('/dashboard/shopinventory/store', [App\Http\Controllers\ShopInventoryController::class, 'store'])->name('shopinventory.store');
Route::get('/dashboard/shopinventory/edit/{id}', [App\Http\Controllers\ShopInventoryController::class, 'edit'])->name('shopinventory.edit');
Route::put('/dashboard/shopinventory/update/{id}', [App\Http\Controllers\ShopInventoryController::class, 'update'])->name('shopinventory.update');
Route::delete('/dashboard/shopinventory/destroy/{id}', [App\Http\Controllers\ShopInventoryController::class, 'destroy'])->name('shopinventory.destroy');

// Dashboard Safe
    Route::get('/dashboard/safe', [App\Http\Controllers\SafeController::class, 'index'])->name('safe.index');
// Dashboard Safe_Clothes
Route::get('/dashboard/safeclothes', [App\Http\Controllers\SafeClothesController::class, 'index'])->name('safeclothes.index');
// Dashboard Safe_Book
Route::get('/dashboard/safebook', [App\Http\Controllers\SafeBookController::class, 'index'])->name('safebook.index');
// Dashboard Safe_Hadana
Route::get('/dashboard/hadana', [App\Http\Controllers\SafeHadanaController::class, 'index'])->name('safehadana.index');
// Dashboard Safe_Donations
    Route::get('/dashboard/safedonations', [App\Http\Controllers\SafeDonationController::class, 'index'])->name('safedonations.index');
// Dashboard Safe_Quran
    Route::get('/dashboard/safequran', [App\Http\Controllers\SafeQuranController::class, 'index'])->name('safequran.index');

// Dashboard invoices_sale
Route::get('/dashboard/bookinvoices', [App\Http\Controllers\InvoiceSaleController::class, 'index'])->name('bookinvoices.index');
Route::get('/dashboard/invoicesale/create', [App\Http\Controllers\InvoiceSaleController::class, 'create'])->name('invoicesale.create');
Route::post('/dashboard/invoicesale/store', [App\Http\Controllers\InvoiceSaleController::class, 'store'])->name('invoicesale.store');
Route::get('/dashboard/bookinvoices/edit/{id}', [App\Http\Controllers\InvoiceSaleController::class, 'edit'])->name('bookinvoices.edit');
Route::get('/dashboard/bookinvoices/update/{id}', [App\Http\Controllers\InvoiceSaleController::class, 'update'])->name('bookinvoices.update');
Route::get('/dashboard/bookinvoices/show/{id}', [App\Http\Controllers\InvoiceSaleController::class, 'show'])->name('bookinvoices.show');
Route::get('/dashboard/bookinvoices/destroy/{id}', [App\Http\Controllers\InvoiceSaleController::class, 'destroy'])->name('bookinvoices.destroy');
//
Route::post('/get-class-by-type',[App\Http\Controllers\InvoiceSaleController::class, 'getClass']);
Route::post('/get-price',[App\Http\Controllers\InvoiceSaleController::class, 'getPrice']);

// Dashboard customer invoices
    Route::get('/dashboard/customerinvoice', [App\Http\Controllers\CustomerInvoiceController::class, 'index'])->name('customerinvoice.index');
    Route::get('/dashboard/customerinvoice/create', [App\Http\Controllers\CustomerInvoiceController::class, 'create'])->name('customerinvoice.create');
    Route::post('/dashboard/customerinvoice/store', [App\Http\Controllers\CustomerInvoiceController::class, 'store'])->name('customerinvoice.store');
    Route::get('/dashboard/customerinvoice/show/{id}', [App\Http\Controllers\CustomerInvoiceController::class, 'show'])->name('customerinvoice.show');





// Dashboard Suppliers invoices
Route::get('/dashboard/supplierinvoices', [App\Http\Controllers\InvoicePurchaseController::class, 'index'])->name('supplierinvoices.index');
Route::get('/dashboard/supplierinvoices/create', [App\Http\Controllers\InvoicePurchaseController::class, 'create'])->name('supplierinvoices.create');
Route::post('/dashboard/supplierinvoices/store', [App\Http\Controllers\InvoicePurchaseController::class, 'store'])->name('supplierinvoices.store');
Route::get('/dashboard/supplierinvoices/show/{id}', [App\Http\Controllers\InvoicePurchaseController::class, 'show'])->name('supplierinvoices.show');
Route::get('/dashboard/supplierinvoices/show2/{id}', [App\Http\Controllers\InvoicePurchaseController::class, 'show2'])->name('supplierinvoices.show2');

Route::get('/dashboard/supplierinvoices/edit/{id}', [App\Http\Controllers\InvoicePurchaseController::class, 'edit'])->name('supplierinvoices.edit');
Route::put('/dashboard/supplierinvoices/update/{id}', [App\Http\Controllers\InvoicePurchaseController::class, 'update'])->name('supplierinvoices.update');
Route::delete('/dashboard/supplierinvoices/destroy/{id}', [App\Http\Controllers\InvoicePurchaseController::class, 'destroy'])->name('supplierinvoices.destroy');


// Dashboard Shop invoices
Route::get('/dashboard/shopinvoices', [App\Http\Controllers\InvoiceShopController::class, 'index'])->name('shopinvoices.index');
Route::get('/dashboard/shopinvoices/create', [App\Http\Controllers\InvoiceShopController::class, 'create'])->name('shopinvoices.create');
Route::post('/dashboard/shopinvoices/store', [App\Http\Controllers\InvoiceShopController::class, 'store'])->name('shopinvoices.store');
Route::get('/dashboard/shopinvoices/show/{id}', [App\Http\Controllers\InvoiceShopController::class, 'show'])->name('shopinvoices.show');
Route::get('/dashboard/shopinvoices/edit/{id}', [App\Http\Controllers\InvoiceShopController::class, 'edit'])->name('shopinvoices.edit');
Route::put('/dashboard/shopinvoices/update/{id}', [App\Http\Controllers\InvoiceShopController::class, 'update'])->name('shopinvoices.update');
Route::delete('/dashboard/shopinvoices/destroy/{id}', [App\Http\Controllers\InvoiceShopController::class, 'destroy'])->name('shopinvoices.destroy');
Route::post('/get-priceee',[App\Http\Controllers\InvoiceShopController::class, 'getpriceee']);



// Dashboard bussubscription
Route::get('/dashboard/bussubscription', [App\Http\Controllers\BusSubscriptionController::class, 'index'])->name('bussubscription.index');
Route::get('/dashboard/bussubscription/create', [App\Http\Controllers\BusSubscriptionController::class, 'create'])->name('bussubscription.create');
Route::post('/dashboard/bussubscription/store', [App\Http\Controllers\BusSubscriptionController::class, 'store'])->name('bussubscription.store');
Route::get('/dashboard/bussubscription/edit/{id}', [App\Http\Controllers\BusSubscriptionController::class, 'edit'])->name('bussubscription.edit');
Route::put('/dashboard/bussubscription/update/{id}', [App\Http\Controllers\BusSubscriptionController::class, 'update'])->name('bussubscription.update');
Route::get('/dashboard/bussubscription/show/{id}', [App\Http\Controllers\BusSubscriptionController::class, 'show'])->name('bussubscription.show');
Route::delete('/dashboard/bussubscription/destroy/{id}', [App\Http\Controllers\BusSubscriptionController::class, 'destroy'])->name('bussubscription.destroy');
Route::post('/get-location-price',[App\Http\Controllers\BusSubscriptionController::class, 'getLocationPrice']);

//

Route::get('/dashboard/invoices/{id}', [App\Http\Controllers\PdfController::class, 'hadana'])->name('pdf.hadana');
Route::get('/dashboard/invoice/{id}', [App\Http\Controllers\PdfController::class, 'hadanaa'])->name('pdf2.hadana');

    Auth::routes();

});


Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [\App\Http\Controllers\StudentsController::class, 'index'])->name('manager.home');


    // Dashboard students
    Route::get('/dashboard/students', [App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
    Route::get('/dashboard/students/create', [App\Http\Controllers\StudentsController::class, 'create'])->name('students.create');
    Route::post('/dashboard/students/store', [App\Http\Controllers\StudentsController::class, 'store'])->name('students.store');
    Route::get('/dashboard/students/show/{id}', [App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');
    Route::get('/dashboard/students/edit/{id}', [App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/dashboard/students/update/{id}', [App\Http\Controllers\StudentsController::class, 'update'])->name('students.update');
    Route::delete('/dashboard/students/destroy/{id}', [App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.destroy');
    // studentwithdrawal
    Route::get('/dashboard/studentwithdrawal', [App\Http\Controllers\StudentsController::class, 'studentwithdrawal'])->name('students.studentwithdrawal');
    Route::get('/dashboard/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal.index');
    Route::get('/dashboard/withdrawal/hadana/{id}', [App\Http\Controllers\WithdrawalController::class, 'hadana'])->name('withdrawal.hadana');
    Route::post('/dashboard/withdrawal/store', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('withdrawal.store');
    Route::get('/dashboard/withdrawal/show/{id}', [App\Http\Controllers\WithdrawalController::class, 'show'])->name('withdrawal.show');






    // Dashboard classes
    Route::get('/dashboard/classes', [App\Http\Controllers\ClassesController::class, 'index'])->name('classes.index');
    Route::get('/dashboard/classes/create', [App\Http\Controllers\ClassesController::class, 'create'])->name('classes.create');
    Route::post('/dashboard/classes/store', [App\Http\Controllers\ClassesController::class, 'store'])->name('classes.store');
    Route::get('/dashboard/classes/edit/{id}', [App\Http\Controllers\ClassesController::class, 'edit'])->name('classes.edit');
    Route::put('/dashboard/classes/update/{id}', [App\Http\Controllers\ClassesController::class, 'update'])->name('classes.update');
    Route::get('/dashboard/classes/show/{id}', [App\Http\Controllers\ClassesController::class, 'show'])->name('classes.show');
    Route::delete('/dashboard/classes/destroy/{id}', [App\Http\Controllers\ClassesController::class, 'destroy'])->name('classes.destroy');

    Auth::routes();


});


Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/user/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Dashboard donations
    Route::get('/dashboard/donations', [App\Http\Controllers\DonationController::class, 'index'])->name('donations.index');
    Route::get('/dashboard/donations/create', [App\Http\Controllers\DonationController::class, 'create'])->name('donations.create');
    Route::post('/dashboard/donations/store', [App\Http\Controllers\DonationController::class, 'store'])->name('donations.store');
    Route::get('/dashboard/donations/show/{id}', [App\Http\Controllers\DonationController::class, 'show'])->name('donations.show');
    Route::get('/dashboard/donations/edit/{id}', [App\Http\Controllers\DonationController::class, 'edit'])->name('donations.edit');
    Route::put('/dashboard/donations/update/{id}', [App\Http\Controllers\DonationController::class, 'update'])->name('donations.update');
    Route::delete('/dashboard/donations/destroy/{id}', [App\Http\Controllers\DonationController::class, 'destroy'])->name('donations.destroy');

    // Dashboard reasons
    Route::get('/dashboard/reasons', [App\Http\Controllers\ReasonController::class, 'index'])->name('reasons.index');
    Route::get('/dashboard/reasons/create', [App\Http\Controllers\ReasonController::class, 'create'])->name('reasons.create');
    Route::post('/dashboard/reasons/store', [App\Http\Controllers\ReasonController::class, 'store'])->name('reasons.store');
    Route::get('/dashboard/reasons/show/{id}', [App\Http\Controllers\ReasonController::class, 'show'])->name('reasons.show');
    Route::get('/dashboard/reasons/edit/{id}', [App\Http\Controllers\ReasonController::class, 'edit'])->name('reasons.edit');
    Route::put('/dashboard/reasons/update/{id}', [App\Http\Controllers\ReasonController::class, 'update'])->name('reasons.update');
    Route::delete('/dashboard/reasons/destroy/{id}', [App\Http\Controllers\ReasonController::class, 'destroy'])->name('reasons.destroy');


    // Dashboard donationsinvoices
    Route::get('/dashboard/donationsinvoices', [App\Http\Controllers\DonationInvoicesController::class, 'index'])->name('donationsinvoices.index');
    Route::get('/dashboard/donationsinvoices/create', [App\Http\Controllers\DonationInvoicesController::class, 'create'])->name('donationsinvoices.create');
    Route::post('/dashboard/donationsinvoices/store', [App\Http\Controllers\DonationInvoicesController::class, 'store'])->name('donationsinvoices.store');
    Route::get('/dashboard/donationsinvoices/show/{id}', [App\Http\Controllers\DonationInvoicesController::class, 'show'])->name('donationsinvoices.show');
    Route::delete('/dashboard/donationsinvoices/destroy/{id}', [App\Http\Controllers\DonationInvoicesController::class, 'destroy'])->name('donationsinvoices.destroy');

    // Dashboard donationsinvoicespurchases
    Route::get('/dashboard/donationinvoicepurchases', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'index'])->name('donationinvoicepurchases.index');
    Route::get('/dashboard/donationinvoicepurchases/create', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'create'])->name('donationinvoicepurchases.create');
    Route::post('/dashboard/donationinvoicepurchases/store', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'store'])->name('donationinvoicepurchases.store');
    Route::get('/dashboard/donationinvoicepurchases/show/{id}', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'show'])->name('donationinvoicepurchases.show');
    Route::delete('/dashboard/donationinvoicepurchases/destroy/{id}', [App\Http\Controllers\DonationInvoicePurchaseController::class, 'destroy'])->name('donationinvoicepurchases.destroy');

    // Dashboard Safe_Donations
    Route::get('/dashboard/safedonations', [App\Http\Controllers\SafeDonationController::class, 'index'])->name('safedonations.index');

    Auth::routes();

});




Route::middleware(['auth', 'user-access:owner'])->group(function () {

    Route::get('/owner/home', [\App\Http\Controllers\HomeController::class, 'owner'])->name('owner.home');
    // Dashboard Safe
    Route::get('/dashboard/details', [App\Http\Controllers\SafeController::class, 'ownerdetails'])->name('ownerdetails.index');
    Route::post('/dashboard/detailsfilter', [App\Http\Controllers\SafeController::class, 'ownerdetailsfilter'])->name('ownerdetailsfilter');
    Auth::routes();


});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


