<?php

namespace App\Libraries;

class Queries
{
    const GetAllGenericTemplates = "
        select
            generic_template_id,
            generic_template_name,
            created_at,
            last_updated_at
        from generic_templates; 
    ";

    const InsertGenericTemplate = "
        insert into generic_templates
        (generic_template_name)
        values
        (?);
    ";

    const UpdateGenericTemplate = "
        update generic_templates
        set generic_template_name = ?
        where generic_template_id = ?;
    ";

    const GetGenericScreenByTemplateId = "
        select
            gt.generic_template_id,
            gt.generic_template_name,
            gs.generic_screen_id,
            gs.generic_screen_name
        from generic_templates gt
        left join generic_screens gs on gs.generic_template_id = gt.generic_template_id
        where gt.generic_template_id = ?;
    ";

    const InsertGenericScreen = "
        insert into generic_screens
        (generic_template_id, generic_screen_name)
        values
        (?, ?);
    ";

    const UpdateGenericScreen = "
        update generic_screens
        set generic_screen_name = ?
        where generic_screen_id = ?;
    ";

    const GetGenericFormByScreenId = "
        select
            gs.generic_screen_id,
            gs.generic_screen_name,
            gf.generic_form_id,
            gf.genegic_form_name,
            gf.config
        from generic_screens gs
        left join generic_froms gf on gf.generic_screen_id = gs.generic_screen_id
        where gs.generic_screen_id = ?;
    ";

    const InsertGenericForm = "
        insert into generic_forms
        (generic_screen_id, generic_form_name, config)
        values
        (?, ?, ?);
    ";

    const UpdateGenericForm = "
        update generic_forms
        set config = ?
        where generic_form_id = ?;
    ";

    const GetCustomerById = "
        select 
            customer_id, 
            customer_full_name,
            customer_signin_name
        from customers
        where customer_id = ?;    
    ";

    const GetCustomerBySigninName = "
        select
            customer_id, 
            customer_full_name,
            customer_signin_name,
            customer_password
        from customers 
        where customer_signin_name = ?
    ";

    const GetCustomerBizById = "
        select 
            customer_biz_id,
            customer_id,
            customer_biz_name,
            created_at,
            last_updated_at
        from customer_biz
        where customer_id = ?;
    ";

    const GetBizScreens = "
        select
            biz_screen_id,
            biz_screen_name,
            customer_biz_id,
            created_at,
            last_updated_at
        from biz_screens
        where customer_biz_id = ?;
    ";

    const GetBizForms = "
        select
            biz_form_id,
            biz_form_name,
            biz_screen_id,
            config,
            created_at,
            last_updated_at
        from biz_forms
        where biz_screen_id = ?;
    ";
}
