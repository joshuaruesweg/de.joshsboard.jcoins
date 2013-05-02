<?php
namespace wcf\system\jcoins\shop\items;

/**
 * a shop item interface
 * 
 * @author  Joshua Rüsweg
 * @package de.joshsboard.jcoins
 */
interface IShopItem {
    
	/**
	 * what happend after buy this item
	 */
	public function buyAction(); 
}
