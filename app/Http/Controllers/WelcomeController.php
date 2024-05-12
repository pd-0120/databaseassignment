<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Parcel;
use App\Models\ParcelDelivery;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
    public function index() {
        // Q1 //
        // $custoemrs = Customer::select('Customer.FirstName', 'Customer.LasttName', 'Contract.StartDate', 'Contract.EndDate', 'NonStandardContract.DiscountPercentage')
        //     ->leftJoin('Contract', 'Contract.CustomerID', '=', 'Customer.CustomerID')
        //     ->leftJoin('NonStandardContract', 'Contract.ContractID', '=', 'NonStandardContract.ContractID')
        //     ->where('Contract.ContractType', 'NonStandard')

        // ->toSql();

        // select `Customer`.`FirstName`, `Customer`.`LastName`, `Contract`.`StartDate`, `Contract`.`EndDate`, `NonStandardContract`.`DiscountPercentage` from `Customer` left join `Contract` on `Contract`.`CustomerID` = `Customer`.`CustomerID` left join `NonStandardContract` on `Contract`.`ContractID` = `NonStandardContract`.`ContractID` where `Contract`.`ContractType` = "NonStandard";

        // Q2

        // $employees = Employee::select('Employee.EmployeeID', 'Employee.FirstName', 'Employee.LastName', DB::raw('COUNT(ParcelDelivery.ParcelID) as parcels_count'), DB::raw('SUM(ParcelDelivery.NumberOfAttempts) as parcels_attempts'))
        // ->join('ParcelDelivery', 'ParcelDelivery.EmployeeID', 'Employee.EmployeeID')
        // ->groupBy('Employee.EmployeeID')
        // ->orderByDesc('parcels_count')
        // ->toSql();
        // select `Employee`.`EmployeeID`, `Employee`.`FirstName`, `Employee`.`LastName`, COUNT(ParcelDelivery.ParcelID) as parcels_count, SUM(ParcelDelivery.NumberOfAttempts) as parcels_attempts from `Employee` inner join `ParcelDelivery` on `ParcelDelivery`.`EmployeeID` = `Employee`.`EmployeeID` group by `Employee`.`EmployeeID` order by `parcels_count` desc

        // Q3
        // $parcelDeliveries = ParcelDelivery::select(
        //     'DeliveryDate',
        //     DB::raw('CONCAT(Parcel.ReceiverFirstName, " ", Parcel.ReceiverLastName) AS receiver_name'),
        //     DB::raw('CONCAT(Parcel.ReceiverStreet, ",", Parcel.ReceiverCity, ",", Parcel.ReceiverState, ",", Parcel.ReceiverPincode) AS receiver_address'),
        //     DB::raw('CONCAT(Employee.FirstName, " ", Employee.LastName) AS employee_name'))
        // ->leftJoin('Employee', 'Employee.EmployeeID', 'ParcelDelivery.EmployeeID')
        // ->leftJoin('Parcel', 'Parcel.ParcelID', 'ParcelDelivery.ParcelID')
        // ->where('DeliveryDate','>=', Carbon::now()->subMonths(2))
        // ->where('DeliveryStatus', 'Delivered')
        // ->where('NumberOfAttempts', 2)
        // ->toSql();

        // select `DeliveryDate`, CONCAT(Parcel.ReceiverFirstName, " ", Parcel.ReceiverLastName) AS receiver_name, CONCAT(Parcel.ReceiverStreet, ",", Parcel.ReceiverCity, ",", Parcel.ReceiverState, ",", Parcel.ReceiverPincode) AS receiver_address, CONCAT(Employee.FirstName, " ", Employee.LastName) AS employee_name from `ParcelDelivery` left join `Employee` on `Employee`.`EmployeeID` = `ParcelDelivery`.`EmployeeID` left join `Parcel` on `Parcel`.`ParcelID` = `ParcelDelivery`.`ParcelID` where `DeliveryDate` >= DATE_SUB(CURRENT_DATE(), INTERVAL 2 MONTH) and `DeliveryStatus` = "Delivered" and `NumberOfAttempts` = 2


        // Q4

        // $parcelDeliveries = ParcelDelivery::select('ParcelDelivery.ParcelID',
        // DB::raw('Customer.LastName as customer_last_name'),
        // DB::raw('CONCAT(Parcel.ReceiverFirstName, " ", Parcel.ReceiverLastName) AS receiver_name'),
        // DB::raw('CONCAT(Parcel.ReceiverStreet, ",", Parcel.ReceiverCity, ",", Parcel.ReceiverState, ",", Parcel.ReceiverPincode) AS receiver_address'),
        // DB::raw('CONCAT(Employee.FirstName, " ", Employee.LastName) AS employee_name'),
        // )->where('DeliveryStatus', 'Lost')
        // ->orWhere('DeliveryStatus', 'Damaged')
        // ->leftJoin('Employee', 'Employee.EmployeeID', 'ParcelDelivery.EmployeeID')
        // ->leftJoin('Parcel', 'Parcel.ParcelID', 'ParcelDelivery.ParcelID')
        // ->leftJoin('Contract', 'Contract.ContractID', 'Parcel.ContractID')
        // ->leftJoin('Customer', 'Customer.CustomerID', 'Contract.CustomerID')
        // ->where('DeliveryDate','>=', Carbon::now()->subMonths(6))
        // ->where('NumberOfAttempts', 2)
        // ->toSql();


        // select `ParcelDelivery`.`ParcelID`, Customer.LastName as customer_last_name, CONCAT(Parcel.ReceiverFirstName, " ", Parcel.ReceiverLastName) AS receiver_name, CONCAT(Parcel.ReceiverStreet, ",", Parcel.ReceiverCity, ",", Parcel.ReceiverState, ",", Parcel.ReceiverPincode) AS receiver_address, CONCAT(Employee.FirstName, " ", Employee.LastName) AS employee_name from `ParcelDelivery` left join `Employee` on `Employee`.`EmployeeID` = `ParcelDelivery`.`EmployeeID` left join `Parcel` on `Parcel`.`ParcelID` = `ParcelDelivery`.`ParcelID` left join `Contract` on `Contract`.`ContractID` = `Parcel`.`ContractID` left join `Customer` on `Customer`.`CustomerID` = `Contract`.`CustomerID` where `DeliveryStatus` = "Lost" or `DeliveryStatus` = "Damaged" and `DeliveryDate` >= DATE_SUB(CURRENT_DATE(), INTERVAL 6 MONTH) and `NumberOfAttempts` = 2

        // Q5

        // $customers = Customer::select('Customer.*', DB::raw('COUNT(Parcel.ParcelID) as parcels_count'))
        // ->leftJoin('Contract', 'Contract.CustomerID', 'Customer.CustomerID')
        // ->leftJoin('Parcel', 'Parcel.ContractID', 'Contract.ContractID')->groupBy('Customer.CustomerID')
        // ->where('Contract.ContractType', 'NonStandard')
        // ->orderBy('parcels_count')
        // ->toSql();

        // select `Customer`.*, COUNT(Parcel.ParcelID) as parcels_count from `Customer` left join `Contract` on `Contract`.`CustomerID` = `Customer`.`CustomerID` left join `Parcel` on `Parcel`.`ContractID` = `Contract`.`ContractID` where `Contract`.`ContractType` = "NonStandard" group by `Customer`.`CustomerID` order by `parcels_count` asc
    }
}
