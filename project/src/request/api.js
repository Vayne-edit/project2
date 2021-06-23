import axios from 'axios';
import axi from './inter.js'

//管理员模块
export const getShow = can=>axi.get("/admin",{params:can});

// 管理员模块
export const getAdmin = can=>axi.get("/admin",can);
export const adminadd = can => axi.post("/admin", can);
export const adminedit = can => axi.get("/admin/{id}/edit", { params: can });
export const admineditdo = can => axi.put("/admin/{id}", can);
export const admindel = can => axi.delete("/admin/{id}", { params: can });


// 用户模块
export const getUser = can => axi.get("/user", {params:can});
export const getUinfo = can=>axi.get("/user/{id}",{params:can});
