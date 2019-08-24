import React from 'react'
const Info = ({name,email,num,state,country,org,job}) =>(

    <div className="card" style={{width: "18rem"}}>
        <ul className="list-group list-group-flush">
            <li className="list-group-item">Name :{name}</li>
            <li className="list-group-item">Email :{email}</li>
            <li className="list-group-item">Phone :{num}</li>
            <li className="list-group-item">State :{state}</li>
            <li className="list-group-item">Country :{country}</li>
            <li className="list-group-item">Organization :{org}</li>
            <li className="list-group-item">Job :{job}</li>
        </ul>
    </div>
)
export default Info;