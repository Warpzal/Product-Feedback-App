import './Navigation.module.scss'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome' // Import the FontAwesomeIcon component
import { faBars } from '@fortawesome/free-solid-svg-icons' // import the icons you need

function Navigation() {
	return (
		<nav className="nav">
			<div className="nav__left">
				<p className="nav__title">Frontend Mentor</p>
				<p className="nav__sub-title">Feedback Board</p>
			</div>
			<div className="nav__right">
				<FontAwesomeIcon
					className="nav__menu"
					icon={faBars}
				></FontAwesomeIcon>
			</div>
		</nav>
	)
}

export default Navigation
