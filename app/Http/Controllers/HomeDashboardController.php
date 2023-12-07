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

    // Profile
    public function profile(){
        return view(self::BASE_PATH .'profile.profile')->with([
            'page_title' => "JeffRia - Profile",
        ]);
    }

    public function edit_profile(){
        return view(self::BASE_PATH .'profile.edit-profile')->with([
            'page_title' => "JeffRia - Edit Profile",
        ]);
    }

    public function affiliate_center(){
        return view(self::BASE_PATH .'profile.affiliate-center')->with([
            'page_title' => "JeffRia - Affiliate Center",
        ]);
    }

    public function explore_creators(){
        return view(self::BASE_PATH .'profile.explore-creators')->with([
            'page_title' => "JeffRia - Explore Creators",
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

    public function notification() {
        return view('notification')->with([
            'page_title' => "JeffRia - Notifications",
        ]);
    }

    // Expenses
    public function expenses_overview() {
        return view(self::BASE_PATH .'expenses.overview')->with([
            'page_title' => "JeffRia - Expenses | Overview",
        ]);
    }

    public function expenses_hosting_server() {
        return view(self::BASE_PATH .'expenses.hosting-server')->with([
            'page_title' => "JeffRia - Expenses | Hosting Server",
        ]);
    }

    public function expenses_api() {
        return view(self::BASE_PATH .'expenses.api')->with([
            'page_title' => "JeffRia - Expenses | API",
        ]);
    }

    public function expenses_ads_pay() {
        return view(self::BASE_PATH .'expenses.ads-pay')->with([
            'page_title' => "JeffRia - Expenses | Ads Pay",
        ]);
    }

    public function expenses_theme() {
        return view(self::BASE_PATH .'expenses.theme')->with([
            'page_title' => "JeffRia - Expenses | Theme",
        ]);
    }

    public function expenses_plugin() {
        return view(self::BASE_PATH .'expenses.plugin')->with([
            'page_title' => "JeffRia - Expenses | Plugin",
        ]);
    }

    public function expenses_software() {
        return view(self::BASE_PATH .'expenses.software')->with([
            'page_title' => "JeffRia - Expenses | Software",
        ]);
    }

    public function summary() {
        return view(self::BASE_PATH .'summary.summary')->with([
            'page_title' => "JeffRia - Summary",
        ]);
    }

    // Help
    public function help_upgrade_to_pro() {
        return view(self::BASE_PATH .'help.upgrade-to-pro')->with([
            'page_title' => "JeffRia - Help | Upgrade To Pro",
        ]);
    }
    
}
