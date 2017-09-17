/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  klaudis
 * Created: Sep 17, 2017
 */

SELECT credentials, address, flavour, amount, cost FROM
    orders
WHERE
    credentials LIKE %?% OR address LIKE %?% OR flavour LIKE %?% OR amount LIKE %?% OR cost LIKE %?%
ORDER BY ? ASC LIMIT ? OFFSET ?;
