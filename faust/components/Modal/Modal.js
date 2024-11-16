'use client';
import React, { useState } from 'react';
import { MdOutlineShoppingCart } from "react-icons/md";
import { MdClose } from "react-icons/md";
import { motion } from 'framer-motion';
import Cart from '../cart';

const modalAnimations = {
  open: {
    height: "calc(100vh - 80px)",
    width: "100%"
  }, 
  closed: {
    height: 0,
    width: 0
  }
}

export default function Toggle() {

  const [ isOpen, setIsOpen ] = useState(false);


  return (
    <>
      <div className="toggle" onClick={() => {setIsOpen(!isOpen)}}>
        <motion.div 
          className="animate-toggle"
          animate={{top: isOpen ? "-100%" : "0"}}
          transition={{duration: 0.5, ease: [0.76, 0, 0.24, 1]}}
        >
          <MdOutlineShoppingCart size={24} />
          <MdClose size={24} /> 
        </motion.div>
      </div>
      <motion.div 
        className="modal"
        variants={modalAnimations}
        animate={isOpen ? "open" : "closed"}
        initial="closed"
      >
        <Cart />
      </motion.div>
    </>
  )
}
