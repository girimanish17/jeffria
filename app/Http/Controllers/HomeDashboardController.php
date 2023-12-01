<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public const BASE_PATH = 'home.';

    public function index(){
        return view('index')->with([
            'page_title' => "Dashboard - JeffRia",
        ]);
    }

    // Projects
    public function add_product() {
        return view(self::BASE_PATH .'projects.add-product')->with([
            'page_title' => "JeffRia - Projects | Add Project",
        ]);
    }

    public function traffic_report() {
        return view(self::BASE_PATH .'projects.traffic-report')->with([
            'page_title' => "JeffRia - Projects | Traffic Report",
        ]);
    }

    public function under_development() {
        return view(self::BASE_PATH .'projects.under-development')->with([
            'page_title' => "JeffRia - Projects | Under Development",
        ]);
    }

    public function launched_products() {
        return view(self::BASE_PATH .'projects.launched')->with([
            'page_title' => "JeffRia - Projects | Launched",
        ]);
    }
    // Projects END

    // Staffs
    public function overview() {
        return view(self::BASE_PATH .'staffs.overview')->with([
            'page_title' => "JeffRia - Staffs | Overview",
        ]);
    }

    public function staffs_list() {
        return view(self::BASE_PATH .'staffs.staffs-list')->with([
            'page_title' => "JeffRia - Staffs | Staffs List",
        ]);
    }

    public function affiliate_traffic() {
        return view(self::BASE_PATH .'staffs.affiliate-traffic')->with([
            'page_title' => "JeffRia - Staffs | Affiliate Traffic",
        ]);
    }
    public function salary_claim_status() {
        return view(self::BASE_PATH .'staffs.salary-claim-status')->with([
            'page_title' => "JeffRia - Staffs | Salary Claim Status",
        ]);
    }

    public function message_center() {
        return view(self::BASE_PATH .'staffs.message-center')->with([
            'page_title' => "JeffRia - Message Center",
        ]);
    }

    
}
