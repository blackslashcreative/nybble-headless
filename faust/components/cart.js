'use client';
import { useAppContext } from '../appContext';
import Link from 'next/link';
import { MdOutlineShoppingCart } from "react-icons/md";

function Cart() {

  const { cart, addItem, removeItem } = useAppContext();

  // Render items in cart
  const renderItems = () => {
    let {items} = cart;
    
    if (!items.length) return <p className="empty-cart"><MdOutlineShoppingCart size={24} /><br/>Your cart is empty!</p>

    let itemList = items.map((item => {
      if(item.quantity > 0) {
        return (
          <div
            className="cart-item"
            key={item.id}
          >
            <div className="item-name">{item.attributes.Name}<br/>x{item.quantity}<span className="item-price">${item.attributes.Price}</span></div>
            <div className="update-quantity">
              <button onClick={() => removeItem(item)}>-</button>
              <button onClick={() => addItem(item)}>+</button>
            </div>
          </div>
        )
      }
    }));
    return itemList;
  }

  const checkoutItems = () => {
    return (
      <div className="cart-footer">
      <Link legacyBehavior href="/contact?checkout">
        <button>Checkout</button>
      </Link>
        <h5>Total: ${cart.total}</h5>
      </div>
    )
  }

  return (
    <section id="cart">
      <h2>Your Order:</h2>
      <hr />
      <div>
        {renderItems()}
      </div>
      <div>
        {checkoutItems()}
      </div>
    </section>
  )
}

export default Cart;