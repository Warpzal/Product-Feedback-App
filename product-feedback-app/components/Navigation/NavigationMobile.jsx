import Tags from '../Tags/Tags.jsx'
import RoadMap from '../RoadMap/RoadMap.jsx'

import 'animate.css'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome' // Import the FontAwesomeIcon component
import { faBars, faTimes } from '@fortawesome/free-solid-svg-icons' // import the icons you need

import { useState } from 'react'

function Navigation() {
	const [isOpenMenu, setOpenMenu] = useState(true)
	const toggleMenu = () => setOpenMenu(!isOpenMenu)

	return (
		<nav className="nav">
			<div className="nav__left">
				<p className="nav__title">Frontend Mentor</p>
				<p className="nav__sub-title">Feedback Board</p>
			</div>
			<div className="nav__right">
				{isOpenMenu ? (
					<FontAwesomeIcon
						onClick={toggleMenu}
						className="nav__menu"
						icon={faTimes}
					></FontAwesomeIcon>
				) : (
					<FontAwesomeIcon
						onClick={toggleMenu}
						className="nav__menu"
						icon={faBars}
					></FontAwesomeIcon>
				)}
			</div>
			{isOpenMenu && (
				<div className="nav__items animate__animated animate__fadeInRight">
					<Tags />
					<RoadMap />
				</div>
			)}
			{isOpenMenu && (
				<div className="nav__overlay animate__animated animate__fadeInLeft"></div>
			)}
		</nav>
	)
}

export default Navigation
