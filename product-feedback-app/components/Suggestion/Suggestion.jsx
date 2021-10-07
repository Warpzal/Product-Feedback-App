import { FontAwesomeIcon } from '@fortawesome/react-fontawesome' // Import the FontAwesomeIcon component
import { faAngleUp, faComment } from '@fortawesome/free-solid-svg-icons' // import the icons you need

function Suggestion({ title, description, tags, likes, comments }) {
	return (
		<div className="suggestion card is-rounded is-block">
			<p className="suggestion__title">{title}</p>
			<p className="suggestion__description">{description}</p>
			<div className="suggestion__tags">
				{tags.map((tag) => {
					return (
						<div className="button button--tag suggestion__tag">
							{tag}
						</div>
					)
				})}
			</div>
			<div className="suggestion__bottom-bar">
				<div className="button">
					<FontAwesomeIcon
						className="suggestion__angleUp"
						icon={faAngleUp}
					></FontAwesomeIcon>
					<span className="suggestion__likes">{likes}</span>
				</div>
				<div className="suggestion__comments">
					<FontAwesomeIcon
						className="suggestion__commentIcon"
						icon={faComment}
					></FontAwesomeIcon>
					<div className="suggestion__comments-num">{comments}</div>
				</div>
			</div>
		</div>
	)
}
export default Suggestion
