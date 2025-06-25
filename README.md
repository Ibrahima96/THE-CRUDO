# 🌐 Tailwind CSS v4 — Guide Complet

Un résumé pratique pour apprendre Tailwind CSS visuellement grâce à des exemples réels et commentés. Organisé par catégories.

---

## 📏 1. Espacement (Margin & Padding)

### 🔹 Padding
- `p-4` : padding global
- `pt-2`, `pb-6`, `pl-1`, `pr-3` : padding par direction
- `px-4`, `py-2` : padding horizontal / vertical
- `p-px` : padding très fin (1px)
- `p-[10px]` : valeur personnalisée

### 🔸 Margin
- `m-0` à `m-96`
- `mx-auto` : centré automatiquement
- `-mt-2` : marges négatives
- `space-x-4`, `space-y-2` : espacement automatique entre enfants (très utile)

---

## 📐 2. Taille des éléments

### 🔹 Largeur (`width`)
- `w-1/2`, `w-full`, `w-screen`
- `w-32`, `w-96` : taille en rem
- `w-xs` à `w-7xl` : tailles textuelles (v4)
- `w-[200px]` : taille arbitraire

### 🔹 Hauteur (`height`)
- `h-20`, `h-screen`, `h-[50px]`, `h-1/2`
- `min-h-9`, `max-h-[100px]` pour limiter la taille

### 🔁 Taille combinée
- `size-44` → applique `w-44 h-44` (largeur = hauteur)

---

## ✍️ 3. Typographie

### 🅰️ Font Size
- `text-xs` à `text-9xl`
- `text-[34px]` : valeur personnalisée

### 📐 Line Height
- `leading-4`, `leading-10`
- `text-lg/10` : taille + hauteur combinée

### 🅱️ Font Weight
- `font-thin` à `font-black`

### ✒️ Font Family
- `font-sans`, `font-serif`, `font-mono`
- `font-[Boldonse]` : police personnalisée importée

### ✂️ Overflow
- `truncate` : coupe le texte trop long avec `...`

---

## 💡 Astuces supplémentaires

- Utilise `Tailwind Intellisense` pour l’autocomplétion.
- Tu peux personnaliser toutes les classes avec des valeurs entre `[]`.
- Combine avec `hover:`, `focus:`, `sm:`, `lg:` pour le responsive et les états.

---

## ✍️ Auteur

> Bicom Lab  
> [bicomlab@gmail.com](bicomlab@gmail.com)

---

## 🧩 Licence

Open source. Utilisable librement pour tout projet ou apprentissage.
