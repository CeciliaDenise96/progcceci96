# -*- coding: latin-1 -*-
import tkinter as tk
from PIL import ImageTk, Image

def obtener_texto():
    texto_ingresado = cuadro_texto.get()
    etiqueta.config(text="Texto ingresado: " + texto_ingresado)
ventana = tk.Tk()
imagen = Image.open("estadocivil.png")
imagen_tk = ImageTk.PhotoImage(imagen)
etiqueta = tk.Label(ventana, image=imagen_tk)
etiqueta.pack()

etiqueta = tk.Label(ventana, text="Texto ingresado:")
etiqueta.pack()
cuadro_texto = tk.Entry(ventana, width = 30)
cuadro_texto.pack()

boton = tk.Button(ventana, text="Obtener texto ", command=obtener_texto)
boton.pack()

ventana.mainloop()
